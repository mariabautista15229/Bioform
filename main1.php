<?php
if (isset($_POST['btnSubmit'])) {

  $Underline = $_POST['line'];
  
  $Check = $_POST['check'];
 

  $Block = $_POST['block'];
  $Street = $_POST['street'];
  $Village = $_POST['village'];
  $Brgy = $_POST['brgy'];

  $City = $_POST['city'];
  $Province = $_POST['prov'];
  $Country = $_POST['country'];
  $Code = $_POST['code'];

  $Blank = $_POST['blank'];

  $Surname = $_POST['sname'];
  $Fname = $_POST['fname'];
  $Ename = $_POST['ename'];
  $Mname = $_POST['mname'];

  $Gender = $_POST['gender'];
  $Email = $_POST['email'];
  $Contact = $_POST['contact'];
  $Year = $_POST['add'];

  $Ocb = $_POST['ocb'];

  $Certificate = $_POST['certi'];
  $Validation = $_POST['valid'];

  $Blank1 = $_POST['b1'];
  $Blank2 = $_POST['b1'];
  $Blank3 = $_POST['b3'];
  $Blank4 = $_POST['b4'];
  $Blank5 = $_POST['b5'];
  $Blank6 = $_POST['b6'];

  $Herby = $_POST['herby'];
  $Day1 = $_POST['day1'];
  $Number = $_POST['num'];
  $Philip = $_POST['phil'];

  $Signature = $_POST['sign'];

  $Rep1 = $_POST['rep1'];
  $Rep2 = $_POST['rep2'];

  $Sworn = $_POST['sworn'];
  $Day2 = $_POST['day2'];
  $Year = $_POST['place'];

  $Id = $_POST['id'];
  $Address = $_POST['issued'];
  $Text = $_POST['text'];
  $Number1 = $_POST['num'];
  $Year1 = $_POST['phil1'];
 

  $Doc = $_POST['doc'];
  $Page = $_POST['page'];
  $Book = $_POST['book'];
  $Series = $_POST['series'];

   $Date = $_POST['date'];


  echo "Application Tracking no.:  ".$Underline;
  echo "<br>";
  echo "<br>";

  echo "Registration Category:          " .$Check;
  echo "<br>";
  echo "<br>";


  echo "1.1 *Business/Company Name:     ".$Blank;
  echo "<br>";
  echo "<br>";

  echo "Unit/Block No.:     ".$Block;
  echo "<br>";
  echo "Street:     ".$Street;
  echo "<br>";
  echo "Subdivision/Village:     ".$Village;
  echo "<br>";
  echo "Barangay     ".$Brgy;
  echo "<br>";
  echo "<br>";

 echo "Company Address";
   echo "<br>";

  echo "Municipality/City:     ".$City;
  echo "<br>";
  echo "Province:     ".$Province;
  echo "<br>";
  echo "Country:     ".$Country;
  echo "<br>";
  echo "Zip Code:     ".$Brgy;
  echo "<br>";
  echo "<br>";
 
 
  echo "1.2 *Name of Company Owner/Authorized Representative";
  echo "<br>";
  echo "<br>";

  echo "Surname:      ".$Surname;
  echo "<br>";
  echo "Firstname:    ".$Fname;
  echo "<br>";
  echo "Extension Name (Jr/Sr/III):      ".$Ename;
  echo "<br>";
  echo "Middle Name: "       .$Mname;
  echo "<br>";
  echo "<br>";
  echo "<br>";

echo "Sex:        " .$Gender;
echo "<br>";
echo "*Position*Email:        " .$Email;
echo "<br>";
echo "*Contact Number(s):        " .$Contact;
echo "<br>";
echo "Address(es):        " .$Year;
echo "<br>";
echo "<br>";

echo "II. ORGANIC CERTIFYING BODY (OCB)";
echo "<br>";

echo "2.1 OCB’s Name:       " .$Ocb;
echo "<br>";
echo "2.2 *Certificate Number:       " .$Certificate;
echo "<br>";
echo "2.3 *Validity:       " .$Validation;
echo "<br>";
echo "<br>";

echo "IIII. ORGANIC PRODUCTS";
echo "<br>";
echo "<br>";

echo "1.             " .$Blank1;
echo "<br>";
echo "2.             " .$Blank2;
echo "<br>";
echo "3.             " .$Blank3;
echo "<br>";
echo "4.             " .$Blank4;
echo "<br>";
echo "5.             " .$Blank5;
echo "<br>";
echo "6.             " .$Blank6;
echo "<br>";
echo "<br>";
echo "<br>";

echo "I HEREBY CERTIFY that the foregoing data and information including those in the attachments hereof are true and correct to the";
echo "best of my knowledge."; echo "<br>";
echo "<br>";
echo "<br>";

echo "In WITNESS WHEREOF. I have hereunto set my hands this  "; echo " " .$Herby; echo " day of "; echo " " .$Day1; echo "20"; echo " " .$Number; echo " at ";
echo " " .$Philip; echo ", Philippines."; echo "<br>";
echo "<br>";
echo "<br>";


echo "Signature Over Printed Name of Owner/Authorized:              " .$Signature;
echo "<br>";
echo "<br>";

echo "PROVINCE OF              " .$Rep1;
echo "<br>";
echo "MUN./CITY OF              " .$Rep2;
echo "<br>";
echo "<br>";

echo "SUBSCRIBED AND SWORN TO before me this  "; echo " " .$Sworn; echo " day of "; echo " " .$Day2; echo "20"; echo " " .$Year; echo " at ";
echo " " .$Id; echo " Affiant exhibited to me his/her Residence Certificate/ID No. "; echo "<br>";
echo "<br>";



echo "  " .$Address; echo " issued on "; echo "  " .$Text; echo " , 20 "; echo "  " .$Number1; echo " at "; echo "<br>";
echo "  " .$Year1; echo ", Philippines."; echo "<br>";
echo "<br>";


echo "Doc No.:" .$Doc;
echo "<br>";
echo "Page No.:" .$Page;
echo "<br>";
echo "Book No.:" .$Book;
echo "<br>";
echo "Series of.:" .$Series;
echo "<br>";
echo "<br>";

echo "NOTARY PUBLIC";
echo "<br>";
echo "<br>";

echo "Until December 31, 20" .$Date;
echo "<br>";
echo "<br>";


  }

?>


 
 

  

  