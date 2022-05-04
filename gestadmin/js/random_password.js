function random_string(length){
  let chars = '0123456789abcdefghijklmnopqrstuvwxyz';
  let string='';
  let motdepasse = document.getElementById('motdepasse');
  for(let i=0; i<length;i++){
    string += chars.charAt(Math.floor(Math.random() * chars.length));
  }
  motdepasse.value = string;
  return string;
}
