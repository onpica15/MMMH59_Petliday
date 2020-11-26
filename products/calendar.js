const title = document.getElementById('title')
const data = document.getElementById('data')

const now = new Date()

const nowY = now.getFullYear()
const nowM = now.getMonth() + 1

const weekList = ['mon.', 'tue.', 'wed.', 'thu.', 'fri.', 'sat.', 'sun.']

for (let i = 0; i < weekList.length; i++) {
  title.innerHTML += `<th>${weekList[i]}</th>`
}

const days = new Date(2020, 11, 0).getDate()

const weekdayFirst = new Date('2020/11/1').getDay()

console.log(days, weekdayFirst)

const numberOfMember = days + weekdayFirst

const dataTemp = []

for (let i = 0; i < numberOfMember; i++) {
  if (i < weekdayFirst) {
    dataTemp.push('')
  } else {
    dataTemp.push(i - weekdayFirst + 1)
  }
}
console.log(dataTemp)

let dataDisplay = '<tr>'

for (let i = 0; i < dataTemp.length; i++) {
  // dataDisplay += `<td><p>${dataTemp[i]}</p><p class="green-color t-m">2280</p></td>`
  dataDisplay += `<td><p>${dataTemp[i]}</p>`
  if ((i + 3) % 7 === 0|| (i + 4) % 7 === 0 || (i + 5) % 7 === 0 || (i + 6) % 7 === 0||(i) % 7 === 0) {
    dataDisplay +=`<p class="green-color t-m">2280</p></td>`
  }
  if ((i + 2) % 7 === 0) {
    dataDisplay +=`<p class="danger-color t-m">2480</p></td>`}
  if ((i + 1) % 7 === 0) {
    dataDisplay +=`<p class="danger-color t-m">2480</p></td>`
    dataDisplay += '</tr><tr>'
    
  }
}
data.innerHTML = dataDisplay

// 測試取得點擊的日期值
$('.calendar td').on('click',function(){
  $('#data').find('td').css('background-color','#fff');
  $(this).css('background-color','#ffc072');
  // console.log('this.val()',td.innerHTML);
  console.log('this.val()',dataTemp[$(this).index()]);
})
