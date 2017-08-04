@extends('layouts.main')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active">Terms and Condition</li>
        </ol>
        <!--end breadcrumb-->
        <section class="page-title">
            <h1>Terms and Conditions</h1>
        </section>
        <!--end page-title-->
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section>
                    <h2>Welcome to AMA Thesis Archive !</h2>
                    <p>Thanks for using our products and services (Services). The Services are provided by AMA Thesis Archive, located at AMA Computer College Makati.
                    <p>By using our Services, you are agreeing to these terms. Please read them carefully.
                    <p>Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.
                    <p>By accessing this website we assume you accept these terms and conditions in full. Do not continue to use Listing Portal's website if you do not accept all of the terms and conditions stated on this page.</p>
                    <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all Agreements: "Client", You and Your refers to you, the person accessing this website and accepting the Company's terms and conditions. "The Company", Ourselves, We, Our and "Us", refers to our Company. Party, Parties, or Us, refers to both the Client and ourselves, or either the Client or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the Client's needs in respect of provision of the Company's stated services/products, in accordance with and subject to, prevailing law of United States. Any use of the above terminology or other words in the singular, plural, capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
                </section>

                <section>
                    <h2>Using our Services</h2>
                    <p>You must follow any policies made available to you within the Services.
                    <p>Don't misuse our Services. For example, don't interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.
                    <p>Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Donâ€™t remove, obscure, or alter any legal notices displayed in or along with our Services.
                    <p>Our Services display some content that is not AMA Thesis Archive's. This content is the sole responsibility of the entity that makes it available. We may review content to determine whether it is illegal or violates our policies, and we may remove or refuse to display content that we reasonably believe violates our policies or the law. But that does not necessarily mean that we review content, so please do't assume that we do.
                    <p>In connection with your use of the Services, we may send you service announcements, administrative messages, and other information. You may opt out of some of those communications.
                    <p>Some of our Services are available on mobile devices. Do not use such Services in a way that distracts you and prevents you from obeying traffic or safety laws.
                </section>

                <section>
                    <h2>Your AMA Thesis Archive Account</h2>
                    <p>You may need a AMA Thesis Archive Account in order to use some of our Services. You may create your own AMA Thesis Archive Account, or your AMA Thesis Archive Account may be assigned to you by an administrator, such as your employer or educational institution. If you are using a AMA Thesis Archive Account assigned to you by an administrator, different or additional terms may apply and your administrator may be able to access or disable your account.
<p>To protect your AMA Thesis Archive Account, keep your password confidential. You are responsible for the activity that happens on or through your AMA Thesis Archive Account. Try not to reuse your AMA Thesis Archive Account password on third-party applications. If you learn of any unauthorized use of your password or AMA Thesis Archive Account, follow these instructions.
                </section>

                <section>
                    <h2>Privacy and Copyright Protection</h2>
                    <p>AMA Thesis Archive <a href="{{ url('/privacy-policy') }}">privacy policies</a> explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that AMA Thesis Archive can use such data in accordance with our privacy policies.
<p>We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.
<p>We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and AMA Thesis Archive's policy about responding to notices in our Help Center.
                </section>

                <section>
                    <h2>Reservation of Rights</h2>
                    <p>We reserve the right at any time and in its sole discretion to request that you remove all links or any particular link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also reserve the right to amend these terms and conditions and its linking policy at any time. By continuing to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.</p>
                </section>

                <section>
                    <h2>Removal of links from our website</h2>
                    <p>If you find any link on our Web site or any linked web site objectionable for any reason, you may contact us about this. We will consider requests to remove links but will have no obligation to do so or to respond directly to you.

                        Whilst we endeavour to ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we commit to ensuring that the website remains available or that the material on the website is kept up to date.</p>
                </section>
            </div>
            <!--end col-md-3-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
@endsection