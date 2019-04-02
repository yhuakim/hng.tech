const head = ``;
const body = ``;
const footer = ``;

$.ajax({
  type: 'GET',
  url: 'https://api.myjson.com/bins/xxx',
  success: function(data) {
    for (let i = 0; i < data.length; i++) {
      console.log('fetched!');

  const intern_img = data[i].intern_img,
      intern_name = data[i].intern_name,
      intern_bio = data[i].intern_bio,
      intern_fb = data[i].intern_fb,
      intern_gh = data[i].intern_gh,
      intern_md = data[i].intern_md,

  let toAppend = ``;

  search += toAppend;
  $('.interns').html(shead + body + footer);
  }
});
