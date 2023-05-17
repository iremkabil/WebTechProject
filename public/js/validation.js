function validate() {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
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
      if(document.myForm.email.value.match(mailformat))
      {
         bool= true;
      }
   }
   if( document.myForm.sifre.value == "" ) {
      alert( "Şifre Eksik!" );
      document.myForm.password.focus() ;
      return false;
   }
   if( false== Number.isInteger(parseInt(Number(document.myForm.sifre.value)))  ) {
      alert( "Sadece sayı girin!" );
      document.myForm.password.focus() ;
      return false;
   }
  
  return bool ;
}
