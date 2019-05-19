window.addEventListener("load", function (){
  var  LSA  =  location.href.split("?")[0].split("/");
  var  CFN  =  LSA[LSA.length-1];
  sessionStorage["frompage"] = CFN;
})	