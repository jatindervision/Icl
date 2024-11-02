<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
@import "compass/css3";
 
$sortcols: 'firstName', 'lastName', 'birth';
 
%sortcol {
  background: rgba(navy, .15);
  text-shadow: 0 1px #eee;
   
  &:before {
    box-shadow: 0 0 .5em navy;
  }
   
  &.prop__name {
    color: lightcyan;
     
    &[data-dir='1']:after { content: '▲'; }
    &[data-dir='-1']:after { content: '▼'; }
  }
}
 
* { box-sizing: inherit; }
 
body {
  background: #555;
  font: 1em/1.25 trebuchet ms, verdana, sans-serif;
  color: #fff;
}
 
table {
  box-sizing: border-box;
  overflow: hidden;
  margin: 4em auto;
  border-collapse: collapse;
  min-width: 23em; width: 70%; max-width: 56em;
  border-radius: .5em;
  box-shadow: 0 0 .5em #000;
}
 
thead {
  background: linear-gradient(#606062, #28262b);
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  cursor: pointer;
}
 
th { text-align: left; }
 
tbody {
  display: flex;
  flex-direction: column;
  color: #000;
}
 
tr {
  display: block;
  overflow: hidden;
  width: 100%;
}
 
.odd {
  background: linear-gradient(#eee 1px, #ddd 1px, #ccc calc(100% - 1px), #999 calc(100% - 1px));
}
 
.even {
  background: linear-gradient(#eee 1px, #bbb 1px, #aaa calc(100% - 1px), #999 calc(100% - 1px));
}
 
[class*='prop__'] {
  float: left;
  position: relative;
  padding: .5em 1em;
  width: 40%;
   
  &:last-child { width: 20%; }
   
  &:before {
    position: absolute;
    top: -.5em; right: 0; bottom: -5em; left: 0;
    content: ''
  }
   
  &:after {
    position: absolute;
    right: .5em;
  }
}
 
@each $col in $sortcols {
  [data-sort-by='#{$col}'] {
    [data-prop-name='#{$col}'] {
      @extend %sortcol;
    }
  }
}
</style>
</head>

<body>
<p>Click table head to sort.</p>
 
<table>
  <thead>
    <tr>
      <th class='prop__name' data-prop-name='firstName'>First Name</th>
      <th class='prop__name' data-prop-name='lastName'>Last Name</th>
      <th class='prop__name' data-prop-name='birth'>Birth</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>

<script>
var table = document.querySelector('table'), 
    table_meta_container = table.querySelector('thead'), 
    table_data_container = table.querySelector('tbody'),
    data = [
  { 'firstName': 'Scooby', 'lastName': 'Doo', 'birth': 1969 }, 
  { 'firstName': 'Yogi', 'lastName': 'Bear', 'birth': 1958 }, 
  { 'firstName': 'Tom', 'lastName': 'Cat', 'birth': 1940 }, 
  { 'firstName': 'Jerry', 'lastName': 'Mouse', 'birth': 1940 }, 
  { 'firstName': 'Fred', 'lastName': 'Flintstone', 'birth': 1960 }
], n = data.length;
 
var createTable = function(src) {
  var frag = document.createDocumentFragment(), 
      curr_item, curr_p;
   
  for(var i = 0; i < n; i++) {
    curr_item = document.createElement('tr');
    curr_item.classList.add(((i%2 === 0)?'odd':'even'));
    data[i].el = curr_item;
     
    for(var p in data[i]) {
      if(p !== 'el') {
        curr_p = document.createElement('td');
        curr_p.classList.add('prop__value');
        curr_p.dataset.propName = p;
        curr_p.textContent = data[i][p];
        curr_item.appendChild(curr_p)
      }
    }
     
    frag.appendChild(curr_item);
  }
   
  table_data_container.appendChild(frag);
};
 
var sortTable = function(entries, type, dir) {  
  entries.sort(function(a, b) { 
    if(a[type] < b[type]) return -dir;
    if(a[type] > b[type]) return dir;
    return 0;
  });
   
  table.dataset.sortBy = type;
   
  for(var i = 0; i < n; i++) {
    entries[i].el.style.order = i + 1;
     
    if((i%2 === 0 && entries[i].el.classList.contains('even')) || 
       (i%2 !== 0 && entries[i].el.classList.contains('odd'))) {
      entries[i].el.classList.toggle('odd');
      entries[i].el.classList.toggle('even');
    }
  }
};
 
createTable(data);
 
table_meta_container.addEventListener('click', function(e) {
  var t = e.target;
   
  if(t.classList.contains('prop__name')) {
    if(!t.dataset.dir) { t.dataset.dir = 1; }
    else { t.dataset.dir *= -1; }
     
    sortTable(data, t.dataset.propName, t.dataset.dir);
  }
}, false);
</script>
</body>
</html>