@extends('layouts.master')

@section('content')
<div class="buyer">
	<div class="container">
		<h1 class="text-center">Buyer</h1>
		<div class="col-xs-12">
			<div class="buyerInfo clearfix">
				<div class="col-xs-3">
					<img class="img-responsive" src="http://i.huffpost.com/gen/1462378/thumbs/o-BAR-CHART-WITH-SMARTPHONES-facebook.jpg" alt="">
				</div>
				<div class="col-xs-9">
					<div class="col-xs-6">
						<div class="row">
							<p class="name">Sue Smith, VP / Sales</p>
							<p class="email">Phone // Email</p>
							<p class="socials">LinkedIN // Facebook //</p>
						</div>
					</div>
					<div class="col-xs-6">
						<a class="contact blink available" href="mailto:email@email.com">
							Available Now! 
							<span>(click to contact)</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="col-xs-3">
				<div class="row">
					<div role="tabpanel">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#documents" aria-controls="documents" role="tab" data-toggle="tab">Documents</a>
							</li>
							<li role="presentation">
								<a href="#people" aria-controls="people" role="tab" data-toggle="tab">People</a>
							</li>
							<li role="presentation">
								<a href="#emails" aria-controls="emails" role="tab" data-toggle="tab">Emails</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-9 contentBox">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="documents">
						<p>If showing Documents, then this is a table of documents, where each row shows a document, and columns 
							show things like type, date, size, etc. Clicking on a document shows it in this space. The document
							view can be dismissed to return to the table.</p>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="people">
						<p>If showing People, then this is a table of people, where each row shows a person, and columns show 
						things like contact informaHon,role in the deal, last Hme on-­‐line, etc. Clicking on a person’s name 
						shows contact detail in this space. That detail can be dismissed to return to the table.</p>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="emails">
						<p>If showing Email messages, then this is a table of messages, organized (perhaps) by thread, where each 
						row is an email message and columns show things like Sender, To, CC, date, names of aMachments, etc. 
						Message detail brings up a dismissable window; other items bring up the appropriate data type tab 
						(Documents or People) with the appropriate detail view selected.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop