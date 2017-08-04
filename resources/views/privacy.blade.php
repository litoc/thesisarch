@extends('layouts.main')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
    <div class="container">
        <section>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active">Privacy Policy</li>
        </ol>
        <!--end breadcrumb-->
        </section>
        <section class="">
            <h1>Privacy Policy</h1>
        </section>
        <!--end page-title-->
        <div class="row">
            <div class="col-sm-9 col-sm-9">
                <section>
                    <h2>Welcome to the AMA Thesis Archive Privacy Policy!</h2>
                    When you use AMA Thesis Archive services, you trust us with your information. This Privacy Policy is meant to help you understand what data we collect, why we collect it, and what we do with it. This is important; we hope you will take time to read it carefully. And remember, you can find controls to manage your information and protect your privacy and security at My Account.
                    <p>There are many different ways you can use our services – to search for and share information, to communicate with other people or to create new content. When you share information with us, for example by creating a AMA Thesis Archive Account, we can make those services even better to show you more relevant search results and ads, to help you connect with people or to make sharing with others quicker and easier. As you use our services, we want you to be clear how we're using information and the ways in which you can protect your privacy.
					<p>Our Privacy Policy explains:
						<ul>
							<li>What information we collect and why we collect it.</li>
							<li>How we use that information.</li>
							<li>The choices we offer, including how to access and update information.</li>
						</ul>
					</p>
                </section>

                <section>
                    <h2>Information we collect</h2>
                    <p>We collect information to provide better services to all of our users – from figuring out basic stuff like which language you speak, to more complex things like which ads you'll find most useful, the people who matter most to you online, or which YouTube videos you might like.
					<p>We collect information in the following ways:
					<ul>
					<li>
					<p><strong>Information you give us.</strong> For example, many of our services require you to sign up for a AMA Thesis Archive Account. When you do, we’ll ask for personal information, like your name, email address, telephone number or credit card to store with your account. If you want to take full advantage of the sharing features we offer, we might also ask you to create a publicly visible AMA Thesis Archive Profile, which may include your name and photo.
					<li>
					<p><strong>Information we get from your use of our services.</strong> We collect information about the services that you use and how you use them, like when you watch a video on YouTube, visit a website that uses our advertising services, or view and interact with our ads and content. This information includes:
					<ul>
					<li>
					<p><strong>Device information</strong>
					<p>We collect device-specific information</a> (such as your hardware model, operating system version, and mobile network information including phone number). AMA Thesis Archive may associate your device identifiers or phone number with your AMA Thesis Archive Account.
					<li>
					<p><strong>Log information</strong>
					<p>When you use our services or view content provided by Restowaze, we automatically collect and store certain information in server logs. This includes:
					<ul>
					<li>details of how you used our service, such as your search queries.
					<li>telephony log information like your phone number, calling-party number, forwarding numbers, time and date of calls, duration of calls, SMS routing information and types of calls.
					<li>Internet protocol address.
					<li>device event information such as crashes, system activity, hardware settings, browser type, browser language, the date and time of your request and referral URL.
					<li>cookies that may uniquely identify your browser or your AMA Thesis Archive Account.</ul>
					<li>
					<p><strong>Location information</strong>
					<p>When you use AMA Thesis Archive services, we may collect and process information about your actual location. We use various technologies to determine location, including IP address, GPS, and other sensors that may, for example, provide AMA Thesis Archive with information on nearby devices, Wi-Fi access points and cell towers.
					<li>
					<p><strong>Unique application numbers</strong>
					<p>Certain services include a unique application number. This number and information about your installation (for example, the operating system type and application version number) may be sent to AMA Thesis Archive when you install or uninstall that service or when that service periodically contacts our servers, such as for automatic updates.
					</li>
                </section>
            </div>
            <!--end col-md-3-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
@endsection