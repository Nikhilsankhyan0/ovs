<?php 
    require_once("inc/header.php");
    require_once("inc/navigation.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <link rel="icon" href="../assets/images/logo/voting_icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>DemocraLink/home</title>
</head>

<body>
    <style>
        body {}

    
      .foot {
            background-color: #f39c12;
            color: white;
            padding: 1em;
            height: 95px;
            text-align: center;
        }
        h1 {
            margin-top: 20px;
            color: orange;
            text-align: center;
            text-shadow: 5px orangered;
        }

        .container {

            width: 100vw;
        }

        .img img {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 500px;
            width: 900px;
        }

        p {
            /* text-align: center; */
        }

        #docs {
            margin-left: 2%;
            margin-right: 2%
        }
    </style>
    <div class="container">

        <h1> DemocraLink : Online Voting System</h1>

        <p>
            With DemocraLink online voting system, your organization members can cast their vote anywhere and anytime
            with secure internet voting
        </p>
        <div class="img">
            <center>
                <img src="../assets/images/homeimg.jpg" alt="home img">
            </center>
        </div>
        <h1>What is Online Voting for an Election?</h1>
        <p id="docs">Online voting (also known as electronic voting, or e-voting) is the process of using an electronic
            method to cast, and then tabulate, votes in an election. In a nutshell, this is what DemocraLink does.
            DemocraLink will help you through the full election process, from notifying voters and collecting votes to
            calculating the results of the election.</p> <br>

        <p id="docs">By contrast, before online voting, elections were conducted using paper to cast votes, and tallies
            were performed by hand. While non-online voting is still prevalent in today’s society, the automation of the
            most important (but arguably, the most tedious) parts of an election (i.e., the voting and tallying) is
            causing online voting to accumulate enormous popularity. Using an internet voting site makes running an
            election simple and easy. Voters also enjoy participating in a remote election from any location.</p> <br>

        <p id="docs">Online voting not only increases convenience for everyone involved, but it also helps protect
            elections from a major risk to their integrity — human error. Ballots can get lost, mistakes can be made
            while calculating results, and humans can be influenced to tamper with an election. An internet voting
            system and other online tools can automate the election process to eliminate errors and add necessary
            security. DemocraLink protects the online voting process by limiting changes to the election during the
            voting period, providing audit trails of the few changes that ARE allowed, displaying results that can be
            manually calculated to verify the computer calculation, and more. Every detail is verifiable, and your
            election integrity is maintained. There are no secrets with online voting in an DemocraLink election —
            except your voters’ voting choices, of course!</p> <br>

        <h1>Online Voting and Ballot Methods</h1>

        <p id="docs">Online voting can generally be conducted in two ways — remote online voting and on-site online
            voting. Your internet voting depends on the options stipulated by your bylaws. Your bylaws are always the
            first place to check when deciding if you need to run an on-site or remote online vote. In some cases, you
            may even be allowed to utilize both options!</p> <br>
        <h1> Online Voting and Ballot Methods</h1>

        <p id="docs">Remote online voting is online voting performed remotely. This type of voting is a form of an
            absentee ballot and is becoming extremely popular, as it goes one step further than on-site voting does to
            increase convenience for the voters. Instead of having to go out and vote in-person, remote online voting
            allows a voter to cast their vote at any time, from anywhere. All a voter needs to vote is a notice
            containing their voting credentials, a device that can connect to the internet, and an internet connection!
        </p> <br>

        <p id="docs">Traditionally, the challenge with remote voting was inherently tied to the distribution method that
            had to be used: postal services. Since paper was the basis for the voting process, paper ballots had to be
            mailed to voters and then had to be mailed back for counting the results of the election. The issues with
            postal services are that postage is expensive, it takes time for ballots to be mailed out and mailed back,
            and information can be lost in the mail.</p> <br>

        <p id="docs">However, when using an online voting process for your remote election, none of the above issues are
            a risk! This is because:

            Emails don’t have a postage charge, so you save on postage.
            They are sent instantly and don’t rely on human delivery, which is prone to errors.
            Your voters don’t have to send anything back — they simply follow the instructions in the email and cast
            their vote, which saves time.</p> <br>

        <p>Your voters will love how easy and simple it is to vote online, and so will you! </p>

    </div>
    <?php
    require_once("inc/footer.php");
?>
</body>
</html>