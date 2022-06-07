<style>

    body {
    background-color: #f6f5fc !important;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  }
  
  .contact-form-wrapper {
    padding: 100px 0;
  }
  
  .contact-form {
    margin-top: 20px;
    padding: 30px 40px;
    background-color: #ffffff;
    border-radius: 12px;
    max-width: 400px;
  }
  
  .contact-form textarea {
    resize: none;
  }
  
  .contact-form .form-input,
  .form-text-area {
    background-color: #f0f4f5;
    height: 50px;
    padding-left: 16px;
  }
  
  .contact-form .form-text-area {
    background-color: #f0f4f5;
    height: auto;
    padding-left: 16px;
  }
  
  .contact-form .form-control::placeholder {
    color: #aeb4b9;
    font-weight: 500;
    opacity: 1;
  }
  
  .contact-form .form-control:-ms-input-placeholder {
    color: #aeb4b9;
    font-weight: 500;
  }
  
  .contact-form .form-control::-ms-input-placeholder {
    color: #aeb4b9;
    font-weight: 500;
  }
  
  .contact-form .form-control:focus {
    border-color: #f33fb0;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.07), 0 0 8px #f33fb0;
  }
  
  .contact-form .title {
    color:#6c55f9;
    text-align: center;
    font-size: 24px;
    font-weight: 500;
  }
  
  .contact-form .description {
    color: #aeb4b9;
    font-size: 14px;
    text-align: center;
  }
  
  .contact-form .submit-button-wrapper {
    text-align: center;
  }
  
  .contact-form .submit-button-wrapper input {
    border: none;
    border-radius: 4px;
    background-color: #6c7dfb;
    color: white;
    text-transform: uppercase;
    padding: 10px 60px;
    font-weight: 500;
    letter-spacing: 2px;
  }
  
  .contact-form .submit-button-wrapper input:hover {
    background-color: #d30069;
  }
  
    </style>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
        <link rel="stylesheet" href=css/form.css>
    </head>
    
<body>
    <div>
    <div class="contact-form-wrapper d-flex justify-content-center">
      <form action="#" class="contact-form">
        <h5 class="title">Contact us</h5>
        
      
        <div>
          <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
        </div>
        <div>
          <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
        </div>
        <div>
          <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required></textarea>
        </div>
        <div class="submit-button-wrapper">
          <input type="submit" value="Send">
        </div>
      </form>
    </div>
  </div></body>
    
</html>