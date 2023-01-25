<div class="row">
	
    <div class="col-12 col-sm-6 col-md-6 col-xl-3">
		<div class="card">
			<div class="card-body">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<h4 class="card-title">Total Complaint</h4>
				<div class="d-flex justify-content-between align-items-center">
					<h2 class="text-dark font-18 mb-0"><?php
					 $this->CI =& get_instance(); 
					 $this->CI->load->database();  
					 $this->CI->load->model('Complaint_model'); 
					 $data = $this->CI->Complaint_model->get_count_users_complaint();
					echo $data;
					 ?></h2>
					<div
						class="text-success font-weight-bold d-flex justify-content-between align-items-center">
						<i class="fa fa-arrow-right mr-1"></i> <span
							class=" text-extra-small">
                            <a href="<?php echo base_url();?>index.php/member/complaint/">View</a>
                            </span>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="col-12 col-sm-6 col-md-6 col-xl-3">
		<div class="card">
			<div class="card-body">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<h4 class="card-title">Resolved Complaint</h4>
				<div class="d-flex justify-content-between align-items-center">
				<h2 class="text-dark font-18 mb-0"><?php
					 $this->CI =& get_instance(); 
					 $this->CI->load->database();  
					 $this->CI->load->model('Complaint_model'); 
					 $data = $this->CI->Complaint_model->get_count_solved_complaint();
					echo $data;
					 ?></h2>
					<div
						class="text-success font-weight-bold d-flex justify-content-between align-items-center">
						<i class="fa fa-arrow-right mr-1"></i> <span
							class=" text-extra-small">
                            <a href="<?php echo base_url();?>index.php/member/complaint/">View</a>
                            </span>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="col-12 col-sm-6 col-md-6 col-xl-3">
		<div class="card">
			<div class="card-body">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<h4 class="card-title">Unfinished Complaint</h4>
				<div class="d-flex justify-content-between align-items-center">
				<h2 class="text-dark font-18 mb-0"><?php
					 $this->CI =& get_instance(); 
					 $this->CI->load->database();  
					 $this->CI->load->model('Complaint_model'); 
					 $data = $this->CI->Complaint_model->get_count_unfinished_complaint();
					echo $data;
					 ?></h2>
					<div
						class="text-success font-weight-bold d-flex justify-content-between align-items-center">
						<i class="fa fa-arrow-right mr-1"></i> <span
							class=" text-extra-small">
                            <a href="<?php echo base_url();?>index.php/member/complaint/">View</a>
                            </span>
					</div>
				</div>
			</div>
		</div>
	</div>
    
</div>