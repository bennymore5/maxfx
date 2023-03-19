@extends("layouts.spacedcustomlayout")






@section("body")







<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
   <div class="container">
       <div class="row align-items-center">
          
           <div class="col-lg-12 col-md-12">
               <div class="section-header text-left">
                   <p>Return <a href="{{route('index')}}">Home</a></p>
                   <h2>TERMS AND CONDITION</h2>
               </div>
               <div class="about-text">
                  
                      
<!-- <h2>Indonectetus facilis leo</h2> -->
<!-- <h2>FREQUENTLY ASK QUESTION</h2> -->
<br />
<b>WELCOME TO {{$company_features? $company_features->companyName:"No company name set"}} </b>
<p style="font-size:20px;color:#1d0002;font-weight:bold;">THE COOPERATION BETWEEN THE COMPANY AND ITS INVESTORS SHALL BE GOVERNED BY THE PROVISIONS OF THESE RULES. REGISTERING ON THE FUND'S WEBSITE, THE PARTICIPANT CONFIRMS THAT HE/SHE HAS THOROUGHLY READ THE USER AGREEMENT AND UNDERTAKES TO FOLLOW IT. IF ANY PROVISIONS OF THESE RULES SEEM TO BE UNACCEPTABLE TO YOU, WE STRONGLY RECOMMEND YOU TO LEAVE THE WEBSITE OF THE INVESTMENT PROJECT AND NOT TO COMPLETE THE LOGIN PROCEDURE.</p><br />


<b>GENERAL PROVISIONS</b>
<p>
The cooperation with the Company is completely voluntary and the investor makes such a decision on its own. It should be noted that only users who came of legal age can become investors and partners of the project.<br /><br />

Engaging in cooperation with the Company, the participant may rest assured of the personal data confidentiality and account security.<br /><br />

Registration on the project website is not an obligation for the participant to invest. Moreover, he/she can make a profit from the Company without personal deposits, as provided for by the terms of the affiliate program.<br /><br />

The Company cooperates with the project participants solely in accordance with the terms specified on the pages of this investment resource. Individual terms of cooperation are not applicable.<br /><br />

The rules of the project have the same legal force as all other information provided on other pages of the Company's website.<br /><br />
</p><br />


<b style="font-size:40px;color:#1d0002;">RIGHTS AND LIABILITIES OF THE COMPANY</b>
<p>
The Company undertakes to provide seamless and round-the-clock access to the project website, as well as to ensure all necessary technical measures for its stable and correct operation.<br /><br />

The Company undertakes not to share data on its customers to third parties.<br /><br />

The Company undertakes to receive investors' funds under trust and use them for the profit-making on cryptocurrency exchanges.<br /><br />

Project developers shall not be responsible for delays in payments caused by payment systems. Also, the Company shall not be responsible for the loss of access to the investment resource due to the fault of your provider.<br /><br />

The Company reserves the right to block accounts of participants who violate the rules of the project. In particular, the users caught creating multi-accounts will be blocked too.<br /><br />


</p><br />



<b style="font-size:40px;color:#1d0002;">RIGHTS AND LIABILITIES OF THE PARTICIPANT</b>
<p>
Registering on the project website, the user confirms that he/she came of legal age in the country of residence and provides only accurate data.
The user undertakes not to transfer the login details to third parties. Otherwise, the Company shall not be responsible for possible negative consequences.<br /><br />

The investor voluntarily makes a deposit to the project and understands the fact that any investment entails risks. He/she assumes responsibility for the decisions taken and their consequences.<br /><br />

The investor has the right to use the Company's investment proposal, to become a member of the affiliate program, in his/her sole discretion, or ignore this opportunity. Besides, all registered users can participate in additional promotional events of the Company, if any.<br /><br />

Participants are obliged to disseminate only reliable information about the Company, investment terms and solvency of the project.<br /><br />

The investor has the right to terminate cooperation with the project at any time without justification.<br /><br />

</p><br />



<b style="font-size:40px;color:#1d0002;">FINAL PROVISIONS</b>
<p>
The Company's website is subject to copyright. Any copying of materials without the knowledge or consent of the project developers for the purpose of commercial use is subject to legal action<br /><br />

The rules of the project can be changed at any time, the new terms shall become legally effective from the date of their publication.<br />

Disputes between the parties shall be settled through negotiations or in accordance with applicable legislation (through legal proceedings).


</p><br />






<p>Our experts have developed a unique investment proposal that will allow you to gain profit from transactions without experience and specific knowledge in the cryptocurrency market. By placing your funds under management of our experts, you may rest assured of a solid profit and fulfilment of our obligations. Create an account on the website of our project right now and engage in high-yield and completely passive earnings.</p><br />




                   <a class="btn" href="{{route('register')}}">START EARNING NOW</a>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- About End -->







@endsection()
