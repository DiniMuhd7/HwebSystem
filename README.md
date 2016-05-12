# MEDICAL-WEB-SERVICE
=======
A Complete Basic Health Information System using [HTML PHP SOAP WSDL MYSQL PHPMYADMIN].

Fork the whole project and copy into your server root folder. if you are using localhost, kindly copy into your localhost htdocs folder. Follow the steps below to setup and have it working. Thank You. 

STEPS - Setting Up Project
        
        Login to your phpMyAdmin
        
----------------------------------------------------------------------------------------------------------

DATABASE

    CREATE Database webservice;

-----------------------------------------------------------------------------------------------------------

TABLE

        CREATE TABLE `patient` (
            `patient_id` int(11) NOT NULL,
            `fullname` varchar(20) NOT NULL,
            `address` varchar(50) NOT NULL,
            `hospital` varchar(20) NOT NULL,
            `sickness` varchar(20) NOT NULL,
            `phone` varchar(20) NOT NULL,
            `birthday` date NOT NULL
         );

------------------------------------------------------------------------------------------------------------------------

INSERT :- This is Optional. You can add record using html form later.

        INSERT INTO `patient` (`patient_id`, `fullname`, `address`, `hospital`, `sickness`, `phone`, `birthday`) VALUES
            (1000, 'Deen Adam', 'Petaling Jaya 47810', 'Tropical Hospital ', 'Typhoid ', '+601000000000', '1993-09-10'),
            (1002, 'Majeed Nell', 'Northside 47810', 'Skale Hospital', 'Malaria', '+601000000000', '2002-05-15'),
            (1003, 'Bell Adam', 'Cyberjaya 47810 ', 'Multiword Hospital', 'Headache ', '+601000000000', '1998-09-10'),
            (1004, 'Sadiq Adam', 'Downtown 47810', 'Sunshine Hospital', 'Fever', '+601000000000', '2000-08-18'),
            (1005, 'Feez West', 'KL Downtown 47810', 'Public Hospital ', 'Cholera ', '+601000000000', '2005-10-15');

-------------------------------------------------------------------------------------------------------------------------

ALTER TABLE:- Apply Primary Key.

        ALTER TABLE `patient`
            ADD PRIMARY KEY (`patient_id`);
  
-------------------------------------------------------------------------------------------------------------------------

DATABASE - Configuration 

Navigate into your localhost root folder.
  
    Open - soap_server.php
  
    Edit and apply your own database connection for all functions that you will find in the soap_server.php file.

--------------------------------------------------------------------------------------------------------------------------

From your webserver localhost root folder open and edit catalog.wsdl

Scroll down to the bottom. This is what you will see below. 

<service name='CatalogService'>

    <port name='CatalogPort' binding='CatalogBinding'>
    
      <soap:address location='http://localhost:8080/sample/soap_server.php'/>
      
    </port>
    
</service>
  
Well, Change the soap address locaton to your valid localhost root address.

<service name='CatalogService'>
    
    <port name='CatalogPort' binding='CatalogBinding'>
      
      <soap:address location='http://localhost:8080/your_root_name/soap_server.php'/>
    
    </port>
    
</service>

-----------------------------------------------------------------------------------------------------------------------

SOAPClient 

Follow the steps which you will find in the screenshot folder of this repository. 

Make sure you follow the steps carefully to access the right php.ini file in your localhost server.

Open the php.ini file and scroll down to the bottom.

Add the following lines.

    soap.wsdl_cache_enabled=0;

    soap.wsdl_cache_ttl=0;

-------------------------------------------------------------------------------------------------------------------------

All Steps Done ?

Great!!!

-------------------------------------------------------------------------------------------------------------------------

TESTING  

Localhost URL :- http://localhost:8080/your_root_name/webservice.php

OR

Server URL :- http://example.com/webservice.php

--------------------------------------------------------------------------------------------------------------------------

Feel free to refork this repository and use it in any of your projects. Plus you can contact me at anytime: deensname@gmail.com  

Best Luck!!!

    Regards

    Deen Adam
