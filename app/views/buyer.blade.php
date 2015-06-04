@extends('layouts.master')

@section('content')
<div class="whirly"></div>
<div class="buyer" ngController="mainController" data-ng-init="catchData('get_data')">
	<div class="container">
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
				</div>
				<div class="col-xs-3 clear">
					<a class="green-dot" href="mailto:sue@seller.com">Sue is available now.<br><span>Click here</span> to contact her.</a>
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="col-xs-12 col-sm-3">
				<div class="peopleDiv">
					<h2>People</h2>
					<div class="people">
						<ul class="peopleList list-unstyled ng-scope" ng-repeat="participant in participants | filter:search">

						<li><a href="" data-toggle="modal" data-target="#{{ participant.oid }}">{{ participant.Name }}</a></li>

						<div class="modalPeopleInfo">
							<div class="modal fade" id="{{ participant.oid }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog buyerModal">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">{{ participant.Name }}</h4>
										</div>
										<div class="modal-body">
											Email: {{ participant.Addr }}<br>
											Last time seen: {{ participant.mTime }}
										</div>
									</div>
								</div>
							</div>
						</div>

						</ul>
						<div class="userMail clearfix">
							<input class="col-xs-12 col-sm-8 personEmail" type="text" id="person_email" placeholder="Person Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Person Email'" >  <button class="btn-success col-xs-12 col-sm-4">Add</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-9">
				<div class="documents">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="documents">
							<div class="filterBlock col-xs-12 ng-scope" ng-repeat="dealspace in result | filter:search">
								<div class="filter">
									<div class="filterTitle clearfix" data-ng-init="sendAndCatchData('get_single_dealspace', dealspace.oid, dealspace.name, dealspace.parts)">
										<h2 class="lightGrayBg ng-binding" style="background:#C8BAC2;"> {{dealspace.name}}</h2>
									</div>
									<div class="filterData" data-ng-init="sendAndCatchDataMime('get_mime', 'a8rzUb3ef')">
										<div role="tabpanel" class="tab-pane fade in" id="emails" ng-repeat="deal in single_dealspace | filter:search">
											
											<div class="modalPeopleInfo">
												<div class="modal fade" id="message_{{ deal.oid }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog buyerModal">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title" id="myModalLabel">{{deal.Subject}}</h4>
															</div>
															<div class="modal-body">
																{{deal.Content}}
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="filterBlock col-xs-12 ng-scope">
												<div class="filter clearfix">
														<div class="large_view hidden-xs clearfix">
															<div class="col-sm-2"><a class="message_clickable" data-toggle="modal" data-target="#message_{{ deal.oid }}">Subject</a></div>
															<div class="col-sm-2" data-toggle="modal" data-target="#document" >Name</div>
															<div class="col-sm-3" data-toggle="modal" data-target="#document" >Sender</div>
															<div class="col-sm-2" data-toggle="modal" data-target="#document" >Type</div>
															<div class="col-sm-3" data-toggle="modal" data-target="#document" >Date</div>

															<div class="col-sm-2"><a class="message_clickable" data-toggle="modal" data-target="#message_{{ deal.oid }}">{{deal.Subject}}</a></div>
															<div class="col-sm-2" data-toggle="modal" data-target="#document" >{{mime.Name}}</div>
															<div class="col-sm-3" data-toggle="modal" data-target="#document" ><a href="mailto:{{deal.FromAddr}}">{{deal.FromAddr}}</a></div>
															<div class="col-sm-2" data-toggle="modal" data-target="#document" >{{mime.MimeType}}</div>
															<div class="col-sm-3" data-toggle="modal" data-target="#document" >{{deal.Date}}</div>
														</div>

														<div class="small_view hidden-sm hidden-md hidden-lg clearfix">
															<div class="col-xs-6"><a class="message_clickable" data-toggle="modal" data-target="#message_{{ deal.oid }}">Subject</a></div>
															<div class="col-xs-6"><a class="message_clickable" data-toggle="modal" data-target="#message_{{ deal.oid }}">{{deal.Subject}}</a></div>
															<div class="col-xs-6" data-toggle="modal" data-target="#document">Name</div>
															<div class="col-xs-6" data-toggle="modal" data-target="#document">{{mime.Name}}</div>
															<div class="col-xs-6" data-toggle="modal" data-target="#document">Sender</div>
															<div class="col-xs-6" data-toggle="modal" data-target="#document"><a href="mailto:{{deal.FromAddr}}">{{deal.FromAddr}}</a></div>
															<div class="col-xs-6" data-toggle="modal" data-target="#document">Type</div>
															<div class="col-xs-6" data-toggle="modal" data-target="#document">{{mime.MimeType}}</div>
															<div class="col-xs-6" data-toggle="modal" data-target="#document">Date</div>
															<div class="col-xs-6" data-toggle="modal" data-target="#document">{{deal.Date}}</div>
														</div>


															<div class="modal fade" id="document" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																<div class="modal-dialog buyerModal">
																	<div class="modal-content">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																			<h4 class="modal-title" id="myModalLabel">{{mime.Name}}</h4>
																		</div>
																		<div class="modal-body">
																			<div id="circleG">
																			<p class="ng-binding loading_att">Loading attachment</p>
																			<div id="circleG_1" class="circleG">
																			</div>
																			<div id="circleG_2" class="circleG">
																			</div>
																			<div id="circleG_3" class="circleG">
																			</div>
																			</div>
																			<div id="attachment-div"></div>
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
						<div role="tabpanel" class="tab-pane fade in" id="people">
							<div class="filterBlock col-xs-12 ng-scope"  ng-repeat="participant in participants | filter:search">

									<div class="filter" ng-if="participant.Name">
										<div class="filterTitle clearfix">
											<h2 class="lightGrayBg ng-binding" style="background:#C06C9B;">{{ participant.Name }}</h2>
										</div>
										<div class="filterData">
											<h3>{{ participant.Name }}</h3>
											<p class="ng-binding">Last time seen: {{ participant.mTime }} </p>
											<p><a href="mailto:{{ participant.Addr }}">{{ participant.Addr }}</a></p>
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