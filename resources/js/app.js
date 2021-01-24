require('./bootstrap');

get_random = function (colors) {
  return list[Math.floor((Math.random()*colors.length))];
}

// document.getElementById("get_random").addEventListener("click", changeBackground, false);
