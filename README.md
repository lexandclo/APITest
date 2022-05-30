# APITest
api_test
API test The Human Resource department of a large corporation has asked for the installation of a door entry system on each of the company's buildings. The door entry system aims to protect unauthorized access to a department building and greet the employee whenever he/she gains access. The company has 5 buildings in three different countries as described below. Each employee will receive only one RFID card. He/she must tap the RFID card on the reader next to the door in order to gain access to the building.

You are asked to: ● design and implement the database (using MySQL or similar) managing buildings, departments and employees ● write an API using PHP that given the RFID card number will return a JSON record The database ● The RFID card number is unique and 32 chars long string ● An employee can work in one or more departments ● UK buildings: ○ The Isaac Newton building: development and accounting departments ○ The Oscar Wilde building: HR and sales departments ○ The Charles Darwin building: the company headquarters ● USA buildings: ○ The Benjamin Franklin building: development and sales departments ● ITALY buildings: ○ The Luciano Pavarotti building: development and sales departments ● For an employee we need to store at least the Full name The API The specification you have been handed for a microservice associated with this security system is as follows:

curl -s ‘https://domain.com/some/endpoint?cn=142594708f3a5a3ac2980914a0fc954f { " full_name": " Julius Caesar", "department": ["director", "development"] }

Config used: Apache/2.4.46 (Unix) OpenSSL/1.0.2u mod_wsgi/3.5 Python/2.7.13 mod_fastcgi/mod_fastcgi-SNAP-0910052141 mod_perl/2.0.11 Perl/v5.30.1 Database client version: libmysql - mysqlnd 7.4.9 PHP extension: mysqliDocumentation curlDocumentation mbstringDocumentation PHP version: 7.4.9

To Set up. Dump tester.sql in database. Set up database settings in config/db.php configure your domain/local domain then go to https://domain.com/api/view?cn=142594708f3a5a3ac2980914a0fc954f
