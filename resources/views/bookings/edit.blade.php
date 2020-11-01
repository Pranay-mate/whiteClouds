<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
            <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

       
    </head>
    <body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"> <img src="/img/cloud2.png" width="50" height="30" alt=""
                loading="lazy">WhiteClouds</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Trending <span class="badge badge-danger">New</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" target="_blank" href="http://www.backpackerbanter.com/blog/">Travel
                            Blog</a>
                        <a class="dropdown-item" target="_blank"
                            href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/coronavirus-vaccine-from-covaxin-to-russian-vaccine-roll-out-here-are-all-the-updates-regarding-covid-19-vaccine-development/photostory/78362614.cms">Pandemic
                            News</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" target="_blank"
                            href="https://www.healthline.com/nutrition/27-health-and-nutrition-tips">Health Care
                            Tips</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contactUs">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bookings/create">Book Tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faqs">FAQs <span class="badge badge-warning">?</span></a>
                </li>
            </ul>
        
    
    </nav>
      <h1>Update ticket</h1>
      <div Class='container'>
        <form action="/bookings/{{$booking->id}}" onsubmit="validate()" method='POST'>
 @csrf
 @method('PUT')
 <h5>Enter your information</h5>
            <div class="row">
                <div class="col">
                    <input type="text" name='Fname' class="form-control" placeholder="First name" value='{{$booking->Fname}}' required>
                </div> 
                <div class="col">
                    <input type="text" name='Lname' class="form-control" placeholder="Last name" value='{{$booking->Lname}}'  required>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input type="email" name='email' class="form-control" placeholder="Email" value='{{$booking->email}}' required>
                </div>
                <div class="col">
                    <input type="number" name='age' class="form-control" placeholder="Age" value='{{$booking->age}}' min="0" required >
                </div>
            </div>
            <div class="row">
                <div class="col">
                      <input type="tel" name="number" placeholder="888 888 8888"  maxlength="12" minlength="10" value='{{$booking->number}}'  title="Ten digits code" required/>    
                 <label style="font-size:9px;padding-left:20px"> Eg : 081 222 2224  </label> 
                </div>
            </div>
            <br>
            <label class="my-2 mr-2" for="inlineFormCustomSelectPref">Gender</label>
            <input list="genders" name="gender" id="gender" value='{{$booking->gender}}'>
  <datalist id="genders">
    <option value="MALE">
    <option value="FEMALE">
    <option value="OTHER">
  </datalist>
 
            <br><br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Country</label>
                    <input type="text" name='country'  class="form-control" id="inputCountry" required value='{{$booking->country}}'>
                </div>
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <input type="text" name='state' class="form-control" id="inputState" required value='{{$booking->state}}'>

                </div>
                <div class="form-group col-md-2">
                    <label for="zip">Zip</label>
                      <input  type="text" pattern="[0-9]{6}" name="zip" placeholder="888 888" value='{{$booking->zip}}' maxlength="6" minlength="6"  title="Zip code" id="inputZip" required/>    

                </div>
                   <div class="form-row">
                <div class="col">
                 <label for="to">To:</label>
                    <input list="to's" name="to" id="to"  onchange="validatePlace()" required value='{{$booking->to}}'>
                      <datalist id="to's">
    <option value="Los Angeles">
    <option value="Dubai">
    <option value="London">
    <option value="Barcelona">
    <option value="Delhi">
  </datalist>
                </div>
                <div class="col">
                 <label for="from">From:</label>

                    <input list="from's" name="from" id="from" onchange="validatePlace()"  required value='{{$booking->from}}'>
                                          <datalist id="from's">
    <option value="Los Angeles">
    <option value="Dubai">
    <option value="London">
    <option value="Barcelona">
    <option value="Delhi">
  </datalist>
                </div>
         <p class="loginError" id='loginError' style="display:none;color:red;">please enter your email address or password.</p>


                      <div class="col">
                <label for="DeptDate">Departure Date:</label>
                <input type="date" onchange="validateDate()" id="DeptDate" name="DeptDate" value='{{$booking->DeptDate}}'>
                </div>
                        <div class="col">
                <label for="DeptTime">Departure Time:</label>
                <select class="custom-select mr-sm-2" id="DeptTime" name='DeptTime'>
                <option value="06:00AM">06:00AM</option>
                <option value="10:00AM">10:00AM</option>
                <option value="04:00PM">04:00PM</option>
                <option value="06:00PM">06:00PM</option>
                <option value="10:00PM">10:00PM</option>
                <option value="12:00PM">12:00PM</option>
            </select>
                </div>
                <div class="col">

                    <h6 class="dropdown-header">Select Travel Class</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Class" id="Economy"
                            value="Economy" checked >
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
            </div>
                   <div class="container">
                        <div class="form-group">
                            <label for="inputPassword6">No. of Tickets</label>
                            <input type="number" id="tickets" name='tickets' class="form-control"  min="1" max='10'  required onchange="validateTickets()"
                                aria-describedby="passwordHelpInline" value='{{$booking->tickets}}'>
                            <small id="passwordHelpInline" class="text-muted">
                                Enter number of total individuals
                            </small>
                        </div>
           

                    </div>
                  <div class="form-group">
                            <label for="inputPassword6">No. of Children</label>
                            <input type="number" id="children" name='childrens' class="form-control mx-sm-3" min="0" max='10'  required value='{{$booking->childrens}}'
                                aria-describedby="passwordHelpInline" value='{{$booking->children}}'>
                            <small id="passwordHelpInline" class="text-muted">
                                Enter number of total children. below age of 13
                            </small>
                        </div>
                        <div class="btn-group my-4">
         
                   
                
                    <input class="form-control" name='cost' id='cost' type="text" placeholder="Total cost of tickets" readonly="readonly" value='{{$booking->cost}}'>
                </div>
                
                <div class="container my-4">
                    <h5>Payment</h5>
                    <div class="btn-group">
                       
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
    var userdate = new Date(document.getElementById("DeptDate").value).toJSON().slice(0,10);
    var today = new Date().toJSON().slice(0,10);
    if(userdate < today){
      alert('Please select Future Date');
    }
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
    var price = tickets * 500;
    //alert (price);
      document.getElementById('cost').value=price;
 
}
</script>
      </body>
</html>
