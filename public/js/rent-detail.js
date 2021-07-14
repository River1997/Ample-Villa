

var day = [{ d: '1天' }, { d: '2天' }, { d: '3天' }, { d: '4天' }, { d: '5天' }, { d: '6天' }, { d: '7天' }, { d: '8天' }, { d: '9天' }, { d: '10天' }, { d: '11天' }, { d: '12天' }, { d: '13天' }, { d: '14天' }, { d: '15天' }, { d: '16天' }, { d: '17天' }, { d: '18天' }, { d: '19天' }, { d: '20天' }, { d: '21天' }, { d: '22天' }, { d: '23天' }, { d: '24天' }, { d: '25天' }, { d: '26天' }, { d: '27天' }, { d: '28天' }, { d: '29天' }, { d: '30天' }];
var days = document.querySelector('#inputDay');
// console.log(days);
var str = '';

for (let index = 0; index < day.length; index++) {
    var content = '<option>' + day[index].d + '</option>';
    // console.log(content);
    // str += content;

    days.innerHTML += content;

}
var people = document.querySelector('#people');
var peo = [{ p: '1人' }, { p: '2人' }, { p: '3人' }, { p: '4人' }, { p: '5人' }, { p: '6人' }, { p: '7人' }, { p: '8人' }, { p: '9人' }, { p: '10人' }, { p: '11人' }, { p: '12人' }, { p: '13人' }, { p: '14人' }, { p: '15人' }, { p: '16人' }, { p: '17人' }, { p: '18人' }, { p: '19人' }, { p: '20人' }, { p: '21人' }, { p: '22人' }, { p: '23人' }, { p: '24人' }, { p: '25人' }, { p: '26人' }, { p: '27人' }, { p: '28人' }, { p: '29人' }, { p: '30人' }];
for (let index = 0; index < peo.length; index++) {
    var person = '<option>' + peo[index].p + '</option>'
    people.innerHTML += person;

}

