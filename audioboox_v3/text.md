1. Install Python
To begin, we have to make sure you have Python installed. Use one of the following commands in either your Command Prompt (Windows) or Terminal (macOS).

py --version
python --version
If the command outputs a version number, then Python is installed on your computer. Otherwise, you can download the Python installer here.

2. Add Python to XAMPP’s Apache
The next thing you need to do is find where Apache’s httpd.conf is in XAMPP.

For Windows, you can open the XAMPP Control Panel and click on Config > Apache (httpd.conf).

httpd.conf in XAMPP Control Panel
Where to find Apache’s httpd.conf in XAMPP.
For macOS, you’ll need to click on the Open Application Folder button in the application. This brings you to the htdocs folder within XAMPP. You’ll need to head one level up and find the apache/conf folder — httpd.conf will be in there.

XAMPP htdocs folder in macOS
This opens the htdocs folder. From there, you’ll need to head one level up, and head to apache/conf/httpd.conf.
3. Add support for .py files
Once httpd.conf is open (you can open it with any text editor, such as Notepad or TextEdit), add the following lines at the end of the file:

httpd.conf:
AddHandler cgi-script .py
ScriptInterpreterSource Registry-Strict
