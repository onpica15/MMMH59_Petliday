const title = document.getElementById('title')
const data = document.getElementById('data')

const now = new Date()

const nowY = now.getFullYear()
const nowM = now.getMonth() + 1

const weekList = ['日','一', '二', '三', '四', '五', '六']

for (let i = 0; i < weekList.length; i++) {
  title.innerHTML += `<th class="fw-5">${weekList[i]}</th>`
}

const days = new Date(2020, 12, 0).getDate()

const weekdayFirst = new Date('2020/12/1').getDay()

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
  // dataDisplay += `<td><p>${dataTemp[i]}</p>`

  // ((i + 3) % 7 === 0|| (i + 4) % 7 === 0 || (i + 5) % 7 === 0 || (i + 6) % 7 === 0||(i) % 7 === 0)
  if ((i + 2) % 13 === 0||(i + 5) % 10 === 0) {
    dataDisplay +=`<td><p class="danger-color fw-5">${dataTemp[i]}</p><p class="danger-color">4280</p></td>`}
  else if ((i + 3) % 11 === 0) {
    dataDisplay +=`<td style="pointer-events:none"><p class="text-gray fw-5">${dataTemp[i]}</p><p class="text-gray t-xs">已額滿</p></td>`}
  else if ((i + 1) % 7 === 0) {
    dataDisplay +=`<td><p class="fw-5">${dataTemp[i]}</p><p class="green-color">4580</p></td>`
    dataDisplay += '</tr><tr>'
  }
  else if(i==0 || i==1){
    dataDisplay +=`<td><p class="fw-5">${dataTemp[i]}</p><p class="green-color"></p></td>`
  }
  else {
    dataDisplay +=`<td><p class="fw-5">${dataTemp[i]}</p><p class="green-color">4280</p></td>`
  }
}
data.innerHTML = dataDisplay

// 測試取得點擊的日期值
$('.calendar td').on('click',function(){
  $('#data').find('td').css('background-color','#fff');
  $(this).css('background-color','#ffc072');
  // console.log('this.val()',td.innerHTML);
  console.log('date',$(this).children('p').html());
  $.put
})
