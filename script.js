/* affix the navbar after scroll below header */
$('nav').affix({
  offset: {
    top: $('#services').offset().top
  }
});