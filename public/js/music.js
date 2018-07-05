document.querySelector('[data-action=playIt]').addEventListener('click', function(){
  if (document.querySelector('input').value === "Do Re Mi Fa Sol La Si") {
    document.getElementById('myAudio').play();
    setTimeout(function(){ window.location.replace("http://192.168.66.6/login"); }, 4200);
  } else {
    let p = document.createElement('p');
    p.innerHTML = 'Are you really a musician?';
    console.log(p);
    document.getElementById('false').appendChild(p);
  }
})
