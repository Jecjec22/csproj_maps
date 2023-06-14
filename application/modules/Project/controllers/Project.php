<?php

class Project extends MY_Controller

{
    public function addProject()
    {
        $this->load->library('form_validation');
        
        // Set validation rules for the project form fields
        $this->form_validation->set_rules('project_name', 'Project Name', 'required');
        $this->form_validation->set_rules('client_name', 'Client Name', 'required');
        $this->form_validation->set_rules('services_needed', 'Services Needed', 'required');
        $this->form_validation->set_rules('project_status', 'Project Status', 'required');
        $this->form_validation->set_rules('due_date', 'Due Date', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('team_size', 'Team Size', 'required');
        
        if ($this->form_validation->run() === false) {
            // Validation failed, show the form again with validation errors
            $this->load->view('project-form');
        } else {
            // Validation succeeded, process the form data
            $projectData = array(
                'project_name' => $this->input->post('project_name'),
                'client_name' => $this->input->post('client_name'),
                'services_needed' => $this->input->post('services_needed'),
                'project_status' => $this->input->post('project_status'),
                'due_date' => $this->input->post('due_date'),
                'address' => $this->input->post('address'),
                'team_size' => $this->input->post('team_size')
            );
            
            // You can now save the project data to the database or perform any other necessary actions
            
            // Redirect to a success page or wherever you want
            redirect('project/success');
        }
    }
    
    public function success()
    {
        // Show a success message after the project is added
        $this->load->view('project-success');
    }
}
