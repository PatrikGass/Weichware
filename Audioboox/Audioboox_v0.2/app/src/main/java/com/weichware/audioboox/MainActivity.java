package com.weichware.audioboox;

import androidx.activity.result.ActivityResult;
import androidx.activity.result.ActivityResultCallback;
import androidx.activity.result.ActivityResultLauncher;
import androidx.activity.result.contract.ActivityResultContracts;
import androidx.appcompat.app.AppCompatActivity;

import android.app.Activity;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import com.itextpdf.text.pdf.PdfReader;
import com.itextpdf.text.pdf.parser.PdfTextExtractor;

import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;

import java.io.File;
import java.io.IOException;


public class MainActivity extends AppCompatActivity {

    private String file_path;
    private String file_uri;
    private TextView extractedTV;
    private Button extractPDFbutton;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    }

    //öffnen des Dateimanagers
    public void openFileDialog(View view) throws IOException {
        Intent data = new Intent(Intent.ACTION_OPEN_DOCUMENT);
        data.setType("application/pdf");
        data = Intent.createChooser(data, "Welches Dokument sollen wir für dich zu einem Audioboox machen?");
        Log.i("Info", "File chooser opened");
        chooseFile.launch(data);
    }
    //Auswahl der Datei & Pfad speichern
    ActivityResultLauncher<Intent> chooseFile = registerForActivityResult
            (new ActivityResultContracts.StartActivityForResult(), new ActivityResultCallback<ActivityResult>() {
                @Override
                public void onActivityResult(ActivityResult result) {
                    if (result.getResultCode() == Activity.RESULT_OK){
                        Intent data = result.getData();
                        Uri uri = data.getData();

                        file_path = uri.getPath(); //klassischer Pfad
                        file_uri = String.valueOf(uri); //Uri Pfad

                        Log.i("Info", "Chosen Filepath= "+file_path);

                        extractPDF();
                    }
            }
        }
    );

    /**
        static void getPDFText(File pdfFile) throws IOException {
        Log.i("Info", "1");
        PDDocument doc = PDDocument.load(pdfFile); //HIER FEHLER: Probleme mit Pfad >Android 11
        String text = new PDFTextStripper().getText(doc);
        //String text = getText(new File(pdfFile));
        System.out.println("Text in PDF: " + text);
        Log.i("Info", text);
    }
     **/
    private void extractPDF() {
        try {
            // creating a string for
            // storing our extracted text.
            String extractedText = "";

            // creating a variable for pdf reader
            // and passing our PDF file in it.
            PdfReader reader = new PdfReader(file_path); // HIER FEHLER: Probleme mit Pfad >Android 11

            // below line is for getting number
            // of pages of PDF file.
            int n = reader.getNumberOfPages();

            // running a for loop to get the data from PDF
            // we are storing that data inside our string.
            for (int i = 0; i < n; i++) {
                extractedText = extractedText + PdfTextExtractor.getTextFromPage(reader, i + 1).trim() + "\n";
                // to extract the PDF content from the different pages
            }

            // after extracting all the data we are
            // setting that string value to our text view.
            extractedTV.setText(extractedText);

            // below line is used for closing reader.
            reader.close();
        }   catch (Exception e) {
            // for handling error while extracting the text file.
            extractedTV.setText("Error found is : \n" + e);
        }
    }
}