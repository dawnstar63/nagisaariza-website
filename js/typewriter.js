var destination;
var sText = '';
var sLastMessage = '';
var sContents = '';
var iSpeed = 0; // time delay of print out
var iLastSpeed = 0;
var iTextPos = 0; // initialise text position

function typewriter_loop()
{
 if ( iTextPos <= sText.length ) {
  destination.innerHTML = sContents + sText.substring(0, iTextPos);
  if ( iTextPos++ < sText.length )
   setTimeout("typewriter_loop()", iSpeed);
  else
    setTimeout("typewriter_loop()", iLastSpeed);
 }
 else
  destination.innerHTML = sContents + sText + ' ' + sLastMessage;
}

function typewriter(sSecondText)
{
  destination = document.getElementById("typedtext");
  sText = destination.textContent;
  sLastMessage = sSecondText;
  sContents = ' ';
  iSpeed = 100; // time delay of print out
  iLastSpeed = 1000;
  iTextPos = 0; // initialise text position
  typewriter_loop();
}
