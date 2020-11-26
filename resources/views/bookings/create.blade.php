@extends('layouts.app')

@section('content')
      <div Class='container mt-5'>
        <form action="/bookings/submit" method="POST" onsubmit="validate()">
 @csrf

 <h5>Enter your information</h5>
            <div class="row">
                <div class="col">
                    <input type="text" name='Fname' class="form-control" placeholder="First name"  required>
                </div> 
                <div class="col">
                    <input type="text" name='Lname' class="form-control" placeholder="Last name"  required>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
                    <input type="email" name='email' class="form-control" placeholder="Email" required>
                </div>
                </div>
                <div class="col">
                    <input type="number" name='age' class="form-control" placeholder="Age"  min="0" required >
                </div>
            </div>
            <div class="row">
                <div class="col">
                      <input type="tel" name="number" placeholder="Phone"  maxlength="12" minlength="10"  title="Ten digits code" required/>    
                 <label style="font-size:9px;padding-left:20px"> Eg : 081 222 2224  </label> 
                </div>
            </div>
            <br>
            <label class="my-2 mr-2" for="gender">Gender</label>
              <select class="custom-select mr-sm-2" id="gender" name='gender'>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
                <option selected value="OTHER">OTHER</option>
            
            </select>

 
            <br><br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Country</label>
                    <input type="text" name='country'  class="form-control" id="inputCountry" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <input type="text" name='state' class="form-control" id="inputState" required>

                </div>
                <div class="form-group col-md-2">
                    <label for="zip">Zip</label>
                      <input  type="text" pattern="[0-9]{6}" name="zip" placeholder="888 888"  maxlength="6" minlength="6"  title="Zip code" id="inputZip" required/>    

                </div>
                   <div class="form-row mt-3">
                <div class="col-md-3">
                 <label for="to">To:</label><br>
        
    <select class="custom-select choice" name="to" id="to"  onchange="validatePlace()" required>
    <option selected disabled>Choose...</option>
    <option value="Los Angeles">Los Angeles</option>
    <option value="Dubai">Dubai</option>
    <option value="London">Londan</option>
    <option value="Barcelona">Barcelona</option>
    <option value="Delhi">Delhi</option>
  </select>
                </div>
                <div class="col-md-3">
                 <label for="from">From:</label><br>
  <select class="custom-select choice" name="from" id="from"  onchange="validatePlace()" required>
    <option selected  disabled>Choose...</option>
    <option value="Los Angeles">Los Angeles</option>
    <option value="Dubai">Dubai</option>
    <option value="London">Londan</option>
    <option value="Barcelona">Barcelona</option>
    <option value="Delhi">Delhi</option>
  </select>
                </div>
         <p class="loginError" id='loginError' style="display:none;color:red;">please enter your email address or password.</p>


                      <div class="col">
                <label for="DeptDate">Departure Date:</label>
                <input type="date" onclick="validateDate()" id="DeptDate" name="DeptDate" required>
                </div>
                        <div class="col">
                <label for="DeptTime">Departure Time:</label>
                <select class="custom-select mr-sm-2" id="DeptTime" name='DeptTime' required>
                <option value="06:00AM">06:00AM</option>
                <option value="10:00AM">10:00AM</option>
                <option value="04:00PM">04:00PM</option>
                <option value="06:00PM">06:00PM</option>
                <option value="10:00PM">10:00PM</option>
                <option value="12:00PM">12:00PM</option>
            </select>
                </div>
               

                          

                  <div class="form-row my-5 mx-2">
                   <div class="form-group mx-2">

                    <h6 class="dropdown-header">Select Travel Class</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Class" id="Economy"
                            value="Economy" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Economy
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Class" id="Business"
                            value="Business">
                        <label class="form-check-label" for="exampleRadios2">
                            Business
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Class" id="FirstClass"
                            value="FirstClass">
                        <label class="form-check-label" for="exampleRadios2">
                            First Class
                        </label>
                    </div>
                </div>
                  <div class="form-group mx-2">

                            <label for="tickets">No. of Tickets</label>
                            <input type="number" id="tickets" name='tickets' class="form-control"  min="1" max='10'  required onchange="validateTickets()"
                                aria-describedby="passwordHelpInline" >
                            <small id="passwordHelpInline" class="text-muted">
                                Enter number of total individuals
                            </small>
                        </div>
           
                            <div class="form-group mx-2">
                            <label for="children">No. of Children</label>
                            <input type="number" id="children" name='childrens' class="form-control" min="0" max='10'  required 
                                aria-describedby="passwordHelpInline">
                            <small id="passwordHelpInline" class="text-muted">
                                Enter number of total children. below age of 13
                            </small>
                        </div>
                        </div>
                    </div>
              
         
                   
                <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">₹</span>
  </div>
                    <input class="form-control" name='cost' id='cost' type="text" placeholder="Total cost of tickets" readonly="readonly" >
                     <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
                </div>
                 
                
                <div class="container my-4">
                    <h5>Payment</h5>
                    <div class="form-group">
                       
                             <label class="my-2 mr-2" for="inlineFormCustomSelectPref"> Select your type of payment</label>
            <select class="custom-select mr-sm-2" id="payment" name='payment'>
                <option value="Net Banking">Net Banking</option>
                <option value="Debit Card">Debit Card</option>
                <option value="Credit Card">Credit Card</option>
                <option value="Card">Card</option>
                <option value="Wallet">Wallet</option>
                <option value="UPI payment">UPI Payment</option>
            </select>
           

<button type="submit" class="btn btn-primary btn-lg btn-block my-5">Book Tickets</button>

</form>
      </div>
      <script >
 

function validateDate() {
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#DeptDate').attr('min', maxDate);
}

function validatePlace() {
     

    var to = document.getElementById("to").value;
    var from = document.getElementById("from").value;
  
    if(to === from){
     alert('Please select different location');
    }

}


function validateTickets() {
    var tickets = document.getElementById("tickets").value;
   // alert(tickets);
    var price = tickets * 5000;
    //alert (price);
      document.getElementById('cost').value=price;
 
}
</script>
@endsection
  

