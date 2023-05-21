function validate() {
var mailformat = /^[a-z]\d{10}@sakarya\.edu\.tr$/;
  var bool=false;   
  if( document.myForm.name.value == "" ) {
     alert( "Kullanıcı Adı Eksik!" );
     document.myForm.name.focus() ;
     return false;
  }
  if( document.myForm.email.value == "" ) {
    alert( "Email Eksik!" );
    document.myForm.email.focus() ;
    return false;
   }
   if( document.myForm.phone.value == "" ) {
      alert( "Telefon numarası Eksik!" );
      document.myForm.phone.focus() ;
      return false;
   }
   if( document.myForm.subject.value == "" ) {
      alert( "Konu Eksik!" );
      document.myForm.subject.focus() ;
      return false;
   }
   if( document.myForm.message.value == "" ) {
      alert( "Mesaj Eksik!" );
      document.myForm.message.focus() ;
      return false;
   }
   if( document.myForm.sehirler.value == "" ) {
      alert( "Şehir seçmediniz!" );
      document.myForm.sehirler.focus() ;
      return false;
   }
   else{
      if(document.getElementById("email").value.match(mailformat))
      {
         bool= true;
      }
   }
   if( document.getElementById("password").value == "" ) {
      alert( "Şifre Eksik!" );
      document.getElementById("password").focus() ;
      return false;
   }
   if( false== Number.isInteger(parseInt(Number(document.getElementById("password").value)))  ) {
      alert( "Sadece sayı girin!" );
      document.getElementById("password").focus() ;
      return false;
   }
  
  return bool ;
}
