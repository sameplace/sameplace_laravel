@extends('layouts.master')

@section('content')
<script type="text/javascript">
	$(function() {
		$( "#emailAccordion, #peopleAccordion" ).accordion({
			heightStyle: "content"
		});
	});
</script>
<div class="buyer" ngController="mainController" data-ng-init="catchData('get_data')">
	<div class="container">
		<!-- <h1 class="text-center">Buyer</h1> -->
		<div class="col-xs-12">
			<div class="buyerInfo clearfix">
				<div class="col-xs-3">
					<img class="img-responsive" src="/images/female.jpg" alt="" width="200">
				</div>
				<div class="col-xs-9">
					<div class="col-xs-6">
						<div class="row">
							<p class="name">Sue Smith, VP / Sales</p>
							<p class="email">650.814.8981 // <a href="mailto:sue@seller.com">sue@seller.com</a></p>
							<p class="socials"><a href="http://www.linkedin.com/in/mdrummond/en">LinkedIN</a> // <a href="http://www.facebook.com/wowd">Facebook</a></p>
						</div>
					</div>
					<div class="col-xs-6">

						<a class="green-dot" href="mailto:sue@seller.com">
							Sue is available now.
							<span></span>
							Click here to contact her.
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
						<div class="filterBlock col-xs-12 ng-scope" ng-repeat="dealspace in result | filter:search">
							<div class="filter" data-ng-init="sendAndCatchDataMime('get_mime', dealspace.oid)" >
								<div class="filterTitle clearfix" data-ng-init="sendAndCatchData('get_single_dealspace', dealspace.oid, dealspace.name, dealspace.parts)">
									<h2 class="lightGrayBg ng-binding" style="background:#C84D4D;"> {{dealspace.name}}</h2>
								</div>
								<div class="filterData">
									<h3>{{single_dealspace[dealspace.num].Subject}}</h3>
									<p class="ng-binding">{{single_dealspace[dealspace.num].Content}} </p>
									<p>{{single_dealspace[dealspace.num].Date}}</p>
								</div>
							</div>
						</div>

						<!-- <div class="filterBlock col-xs-12 ng-scope">
							<div class="filter">
								<div class="filterTitle clearfix">
									<h2 class="lightGrayBg ng-binding" style="background:#C84D4D;"> Second Document</h2>
								</div>
								<div class="filterData">
									<p class="ng-binding">If showing Documents, then this is a table of documents, where each row shows a document, and columns 
							show things like type, date, size, etc. Clicking on a document shows it in this space. The document
							view can be dismissed to return to the table.</p>
								</div>
							</div>
						</div>
						<div class="filterBlock col-xs-12 ng-scope">
							<div class="filter">
								<div class="filterTitle clearfix">
									<h2 class="lightGrayBg ng-binding" style="background:#C84D4D;"> Third Document</h2>
								</div>
								<div class="filterData">
									<p class="ng-binding">If showing Documents, then this is a table of documents, where each row shows a document, and columns 
							show things like type, date, size, etc. Clicking on a document shows it in this space. The document
							view can be dismissed to return to the table.</p>
								</div>
							</div>
						</div> -->

					</div>
					<div role="tabpanel" class="tab-pane fade in" id="people">
						<div class="filterBlock col-xs-12 ng-scope">
							<div class="filter">
								<div id="peopleAccordion">
								  <h2>Monta Ellis</h2>
								  <div class="section filterData">
									<ul class="list-group">
										<li class="list-group-item">Monta Ellis</li>
										<li class="list-group-item">If showing People, then this is a table of people, where each row shows a person, and columns show 
						things like contact informaHon,role in the deal, last Hme on-­‐line, etc. Clicking on a person’s name 
						shows contact detail in this space. That detail can be dismissed to return to the table.</li>
										<li class="list-group-item"><a href="mailto:email@email">montaellis@email.com</a></li>
									</ul>
								  </div>
								  <h2>Dirk Nowitzki</h2>
								  <div class="section filterData">
								    <ul class="list-group">
										<li class="list-group-item">Dirk Nowitzki</li>
										<li class="list-group-item">If showing People, then this is a table of people, where each row shows a person, and columns show 
						things like contact informaHon,role in the deal, last Hme on-­‐line, etc. Clicking on a person’s name 
						shows contact detail in this space. That detail can be dismissed to return to the table.</li>
										<li class="list-group-item"><a href="mailto:email@email">dirknowitzki@email.com</a></li>
									</ul>
								  </div>
								  <h2>Rajon Rondo</h2>
								  <div class="section filterData">
								    <ul class="list-group">
										<li class="list-group-item">Rajon Rondo</li>
										<li class="list-group-item">If showing People, then this is a table of people, where each row shows a person, and columns show 
						things like contact informaHon,role in the deal, last Hme on-­‐line, etc. Clicking on a person’s name 
						shows contact detail in this space. That detail can be dismissed to return to the table.</li>
										<li class="list-group-item"><a href="mailto:email@email">rajonrondo@email.com</a></li>
									</ul>
								  </div>
								  <h2>Tyson Chandler</h2>
								  <div class="section filterData">
								    <ul class="list-group">
										<li class="list-group-item">Tyson Chandler</li>
										<li class="list-group-item">If showing People, then this is a table of people, where each row shows a person, and columns show 
						things like contact informaHon,role in the deal, last Hme on-­‐line, etc. Clicking on a person’s name 
						shows contact detail in this space. That detail can be dismissed to return to the table.</li>
										<li class="list-group-item"><a href="mailto:email@email">tysonchandler@email.com</a></li>
									</ul>
								  </div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="emails">
						<div class="filterBlock col-xs-12 ng-scope">
							<div class="filter">
								<div id="emailAccordion">
								  	<h2>Section 1</h2>
								 	<div class="section emailData">
										<div class="clearfix col-xs-12 ng-scope">
											<div class="row">
												<div class="clearfix">
													<div class="row">
														<div class="col-xs-6 messageFrom">
															<a href="mailto:uros@sameplace.com" class="ng-binding">uros@sameplace.com</a>
														</div>
														<div class="col-xs-6 messageCreated ng-binding">
															
														</div>
													</div>
												</div>
												<h4 class="ng-binding">The Bat</h4>
												<div class="col-xs-12 messageContent ng-binding">
													This is an email message
												</div>
											</div>
										</div>
								  	</div>
								  	<h2>Section 2</h2>
								  	<div class="section emailData">
										<div class="clearfix col-xs-12 ng-scope">
											<div class="row">
												<div class="clearfix">
													<div class="row">
														<div class="col-xs-6 messageFrom">
															<a href="mailto:uros@sameplace.com" class="ng-binding">uros@sameplace.com</a>
														</div>
														<div class="col-xs-6 messageCreated ng-binding">
															
														</div>
													</div>
												</div>
												<h4 class="ng-binding">The Joker</h4>
												<div class="col-xs-12 messageContent ng-binding">
													This is second email message
												</div>
											</div>
										</div>
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop