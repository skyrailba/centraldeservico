(function myFunction() {
  var uri = "https://docs.google.com/presentation/d/e/2PACX-1vSRHS0SD9iES3kAjEKlt5wLYpgteZrUa2A66ceagJjCsHCJdAJayyXSJGS57ZPBDg/embed?start=false&loop=true&delayms=60000";
  var res = encodeURI(uri);
  document.getElementById("imageoption").src = res;
}
)