/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

// Mobile Menu confguration
document.addEventListener("DOMContentLoaded", function() {
  var menuItems = document.querySelectorAll(".mobile-menu .menu-item-has-children");

  menuItems.forEach(function(item) {
    var button = document.createElement("button");
    button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>';
    button.classList.add("toggle-menu-button");
    item.appendChild(button);
  });

  document.querySelectorAll(".toggle-menu-button").forEach(function(button) {
    button.addEventListener("click", function(e) {
      e.preventDefault();
      e.stopPropagation();
      button.classList.toggle('active');

      var menuItem = this.parentElement;
      var menuItemLink = menuItem.querySelector("a");

      if (menuItemLink.classList.contains("is-open")) {
        menuItemLink.classList.remove("is-open");
      } else {
        document.querySelectorAll(".menu-item a").forEach(function(item) {
          item.classList.remove("is-open");
        });
        menuItemLink.classList.add("is-open");
      }

      var subMenu = menuItemLink.nextElementSibling;

      if (subMenu.classList.contains('show')) {
        subMenu.classList.remove('show');
        subMenu.style.height = '0px';
      } else {
        var parent = menuItem.parentElement;
        parent.querySelectorAll('li .sub-menu').forEach(function(item) {
          item.classList.remove('show');
          item.style.height = '0px';
        });
        subMenu.classList.toggle('show');
        subMenu.style.height = 'auto';
      }
    });
  });
});

$(document).ready(function(){
    let activeCard = '';
    $("#team-member-wrapper button").click(function(){
        var me = $(this);
        // do whatever with me
        // alert(me.val());
        activeCard = me.val()
        $("#"+ activeCard).removeClass('hidden');
        $("#"+ activeCard).addClass('flex');
        // me.hide();
    }); 
  
    // $(".popup-wrapper").click(function() {
    //   console.log("wrapper clicked")
    //   console.log(activeCard)
    //   $("#"+ activeCard).addClass('hidden')
    //   $("#"+ activeCard).removeClass('flex')
    //   //$("#"+ activeCard).css('display', 'hidden')
    // })
    $(".close-card").click(function() {
      console.log("wrapper clicked")
      console.log(activeCard)
      $("#"+ activeCard).addClass('hidden')
      $("#"+ activeCard).removeClass('flex')
      //$("#"+ activeCard).css('display', 'hidden')
    })
  });