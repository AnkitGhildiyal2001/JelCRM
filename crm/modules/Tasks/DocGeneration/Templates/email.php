<?php



$mail->AddEmbeddedImage("modules/Tasks/DocGeneration/Templates/logo.png", "logo");



?>



<!DOCTYPE html

    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>



<head>

    <meta charset="UTF-8">

    <meta content="width=device-width, initial-scale=1" name="viewport">

    <meta name="x-apple-disable-message-reformatting">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="telephone=no" name="format-detection">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">

    <title></title>

    <!--[if (mso 16)]>

    <style type="text/css">

    a {text-decoration: none;}

    </style>

    <![endif]-->

    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->



    <style>

        #body li {

            margin: 15px 0px;

        }

    </style>

</head>



<body id="body" style="color:#292929;font-family:'Muli'">

    <img alt="jel logo" src="cid:logo">

    <p>Dear <?php echo $lead->first_name . ' ' . $lead->last_name; ?>,</p>

    <p>Thank you for your interest in J.E. Lawrence &amp; Company’s Claims Recovery Services.</p>



    <p>At the request of your JEL Account Executive, <?php echo $ae->first_name . ' ' . $ae->last_name; ?>, I

        am sending you the following as attachments:</p>



    <ul>

        <li>A <strong>Case Description</strong> for the

            MasterCard/Visa Payment Card Interchange Fee and Merchant Discount

            Antitrust Litigation for your information.</li>

        <li>A court-mandated <strong>Client Agreement</strong>.

            <br>

            Note: <u>If you have already signed a JEL Client Agreement for this case</u>

            – but did so prior to 1/1/19, please be advised that because of the

            changes that have occurred during the length of time that this case has

            been negotiated, the court is requiring that you sign a new, updated

            agreement with JEL.</li>

        <li>An <strong>Estimate Form</strong> for reporting your credit card

            sales for the periods covered by the case. This information will likely be

            necessary for claim submission and/or validation.

            <br><br><strong>Note: If you have already submitted a detailed estimate to JEL</strong> for the period 2004

            to 2012

            (i.e. Page 1 of this Estimate Form), you need only fill out and return page 2 of this Estimate Form.</li>

    </ul>



    <p><strong>Instructions for document completion and return</strong></p>



    <ol>

        <li>The Client Agreement and Estimate Form must be filled out by

            typing the requested/missing information on them, saved to your computer, 

            and copies of the saved documents returned to us.Please return the Agreement 

            immediately, and return the Estimate Form when you have fully gathered the data.</li>

        <li>Please note that the Client Agreement and Estimate Form are being sent to 

        you as Microsoft WORD documents. This is for your convenience in typing the needed 

        information on them. In launching a document in Microsoft WORD, you will likely see a box 

        which reads “Enable Editing”. You must select this box before you can type on it and 

        save it to your computer.<br>

            <br>

            Also for your convenience, we have pre-filled all the data for which 

            we have information. If corrections are required, they may be 

            made by re-typing them in the appropriate areas on the documents 

            before you save them to your computer.

            <br>

            <br>

            <strong><u>Please DO NOT print out these documents, fill them out by hand, or convert 

            them to any other format (e.g. fax, scanned to a gif or jpg, or PDF) as 

            the means for sending them back to us.</u></strong> </li>

        <li>For the purposes of the Client Agreement and the Estimate Form, <u>it is legally 

        valid and binding</u> for you to ‘sign’ them by simply typing your name in the designated space. 

        The <strong>Uniform Electronic Transactions Act of 1999 (UETA)</strong> or your state 

        law (in NY, IL and WA) will treat this “signature” as though you had signed the document with ink on paper.</li>

        <li>To return these documents, simply <span style="color:red;">REPLY ALL</span> to this email and attach the signed versions.</li>

    </ol>



    <p>If you have any questions about this case or how to return these documents, please don’t

        hesitate to contact your Account Executive <?php echo $ae->first_name . ' ' . $ae->last_name; ?> <?=$aeEmail?>

    </p>



    <p>Thank you for using J.E. Lawrence &amp; Co. as your Claims recovery company. We look

        forward to serving you.</p>



    <p>Sincerely,</p>



    Christine Appleyard<br>

    Vice President, Client Services<br>

    J. E. Lawrence &amp; Company<br>

    3016 North US Highway 301, Suite 350<br>

    Tampa, FL 33619<br>

    <a href="mailto:Christine@jelcrs.com">Christine@jelcrs.com</a>
    
    



</body>



</html>