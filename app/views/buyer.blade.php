@extends('layouts.master')

@section('content')
<script type="text/javascript">
	$(function() {
		$( "#emailAccordion, #peopleAccordion" ).accordion({
			heightStyle: "content"
		});
	});
</script>
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
						<div class="filterBlock col-xs-12 col-sm-6 col-md-4 ng-scope">
							<div class="filter">
								<div class="filterTitle lightGrayBorder clearfix">
									<h2 class="lightGrayBg ng-binding" style="background:#C84D4D;"> First Document</h2>
								</div>
								<div class="filterData">
									<p class="ng-binding">If showing Documents, then this is a table of documents, where each row shows a document, and columns 
							show things like type, date, size, etc. Clicking on a document shows it in this space. The document
							view can be dismissed to return to the table.</p>
								</div>
							</div>
						</div>
						<div class="filterBlock col-xs-12 col-sm-6 col-md-4 ng-scope">
							<div class="filter">
								<div class="filterTitle lightGrayBorder clearfix">
									<h2 class="lightGrayBg ng-binding" style="background:#C84D4D;"> Second Document</h2>
								</div>
								<div class="filterData">
									<p class="ng-binding">If showing Documents, then this is a table of documents, where each row shows a document, and columns 
							show things like type, date, size, etc. Clicking on a document shows it in this space. The document
							view can be dismissed to return to the table.</p>
								</div>
							</div>
						</div>
						<div class="filterBlock col-xs-12 col-sm-6 col-md-4 ng-scope">
							<div class="filter">
								<div class="filterTitle lightGrayBorder clearfix">
									<h2 class="lightGrayBg ng-binding" style="background:#C84D4D;"> Third Document</h2>
								</div>
								<div class="filterData">
									<p class="ng-binding">If showing Documents, then this is a table of documents, where each row shows a document, and columns 
							show things like type, date, size, etc. Clicking on a document shows it in this space. The document
							view can be dismissed to return to the table.</p>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="people">
						<div class="filterBlock col-xs-12 ng-scope">
							<div class="filter">
								<div id="peopleAccordion">
								  <h3>Monta Ellis</h3>
								  <div class="section">
									<ul class="list-group">
										<li class="list-group-item">Monta Ellis</li>
										<li class="list-group-item">If showing People, then this is a table of people, where each row shows a person, and columns show 
						things like contact informaHon,role in the deal, last Hme on-­‐line, etc. Clicking on a person’s name 
						shows contact detail in this space. That detail can be dismissed to return to the table.</li>
										<li class="list-group-item"><a href="mailto:email@email">montaellis@email.com</a></li>
									</ul>
								  </div>
								  <h3>Dirk Nowitzki</h3>
								  <div class="section">
								    <ul class="list-group">
										<li class="list-group-item">Dirk Nowitzki</li>
										<li class="list-group-item">If showing People, then this is a table of people, where each row shows a person, and columns show 
						things like contact informaHon,role in the deal, last Hme on-­‐line, etc. Clicking on a person’s name 
						shows contact detail in this space. That detail can be dismissed to return to the table.</li>
										<li class="list-group-item"><a href="mailto:email@email">dirknowitzki@email.com</a></li>
									</ul>
								  </div>
								  <h3>Rajon Rondo</h3>
								  <div class="section">
								    <ul class="list-group">
										<li class="list-group-item">Rajon Rondo</li>
										<li class="list-group-item">If showing People, then this is a table of people, where each row shows a person, and columns show 
						things like contact informaHon,role in the deal, last Hme on-­‐line, etc. Clicking on a person’s name 
						shows contact detail in this space. That detail can be dismissed to return to the table.</li>
										<li class="list-group-item"><a href="mailto:email@email">rajonrondo@email.com</a></li>
									</ul>
								  </div>
								  <h3>Tyson Chandler</h3>
								  <div class="section">
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
								  	<h3>Section 1</h3>
								 	<div class="section">
										<div class="message clearfix col-xs-12 ng-scope">
											<div class="row">
												<div class="messageHeader clearfix">
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
								  	<h3>Section 2</h3>
								  	<div class="section">
										<div class="message clearfix col-xs-12 ng-scope">
											<div class="row">
												<div class="messageHeader clearfix">
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