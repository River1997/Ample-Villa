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
var arrive = document.querySelector('#arrivaltime');
var arri = [{a:'上午  00:00-01:00'},{a:'上午  01:00-02:00'},{a:'上午  02:00-03:00'},{a:'上午  03:00-04:00'},{a:'上午  04:00-05:00'},{a:'上午  05:00-06:00'},{a:'上午  06:00-07:00'},{a:'上午  07:00-08:00'},{a:'上午  08:00-09:00'},{a:'上午  09:00-10:00'},{a:'上午  10:00-11:00'},{a:'上午  11:00-12:00'},{a:'下午  12:00-01:00'},{a:'下午  01:00-02:00'},{a:'下午  02:00-03:00'},{a:'下午  03:00-04:00'},{a:'下午  04:00-05:00'},{a:'下午  05:00-06:00'},{a:'下午  06:00-07:00'},{a:'下午  07:00-08:00'},{a:'下午  08:00-09:00'},{a:'下午  09:00-10:00'},{a:'下午  10:00-11:00'},{a:'下午  11:00-00:00'}];
for (let index = 0; index < arri.length; index++) {
    var arritime = '<option>' + arri[index].a + '</option>'
    arrive.innerHTML += arritime;

}
var rooms = document.querySelector('.rooms');
var room = [{ r: '1間' }, { r: '2間' }, { r: '3間' }, { r: '4間' }];
for (let index = 0; index < room.length; index++) {
    var roomss = '<option>' + room[index].r + '</option>'
    rooms.innerHTML += roomss;

}
// var rooms2 = document.querySelector('.rooms2');
// for (let index = 0; index < room.length; index++) {
//     var roomss = '<option>' + room[index].r + '</option>'
//     rooms2.innerHTML += roomss;

// }
// var rooms3 = document.querySelector('.rooms3');
// for (let index = 0; index < room.length; index++) {
//     var roomss = '<option>' + room[index].r + '</option>'
//     rooms3.innerHTML += roomss;

// }
// var rooms4 = document.querySelector('.rooms4');
// for (let index = 0; index < room.length; index++) {
//     var roomss = '<option>' + room[index].r + '</option>'
//     rooms4.innerHTML += roomss;

// }



