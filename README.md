Follow the below instructions to run the translator and transliterator :

1) a.
Create the following database

database name : etoh
table name : words	
the table should have the below features	

+-----------+--------------+------+-----+---------+-------+
| Field     | Type         | Null | Key | Default | Extra |
+-----------+--------------+------+-----+---------+-------+
| ITRANS    | varchar(100) | YES  |     | NULL    |       |
| English   | varchar(100) | YES  |     | NULL    |       |
| Example_e | varchar(400) | YES  |     | NULL    |       |
| Example_h | varchar(400) | YES  |     | NULL    |       |
+-----------+--------------+------+-----+---------+-------+

For mysql login:
username : root
password : ''

Convert the given excel sheet 'data01.ods' into the table 'words' .

b.

First make a database named 'etoh' and then use the table backup file to create the table.
The backup file '_words_backup_sql_.sql' contains the table words.

2) Run the following command on terminal to make the table able store devnagari script .

 ALTER TABLE words convert to character set utf8 collate utf8_unicode_ci; 

3) Windows user can keep the folder 'final' in the htdocs folder (for xampp) , generally where the localhost runs.

4)Run project1.1.php in the browser and use it .



