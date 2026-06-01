<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function legal_data_processing()
    {
        $data['meta_title'] = 'Legal Data Processing - Allianze Digital';
        $data['meta_keywords'] = 'legal data processing, data protection, GDPR compliance, Allianze Digital';
        return view('services.legal-data-processing', $data);
    }

    public function insurance_data_processing()
    {
        $data['meta_title'] = 'Insurance Data Processing - Allianze Digital';
        $data['meta_keywords'] = 'insurance data processing, claims management, policy administration, Allianze Digital';
        return view('services.insurance-data-processing', $data);
    }
    public function logistics_data_processing()
    {
        $data['meta_title'] = 'Logistics Data Processing - Allianze Digital';
        $data['meta_keywords'] = 'logistics data processing, supply chain management, inventory management, Allianze Digital';
        return view('services.logistics-data-processing', $data);
    }
    public function healthcare_data_processing()
    {
        $data['meta_title'] = 'Healthcare Data Processing - Allianze Digital';
        $data['meta_keywords'] = 'healthcare data processing, medical records management, patient data security, Allianze Digital';
        return view('services.healthcare-data-processing', $data);
    }
    public function scanning_and_indexing()
    {
        $data['meta_title'] = 'Scanning and Indexing - Allianze Digital';
        $data['meta_keywords'] = 'scanning and indexing, document digitization, data organization, Allianze Digital';
        return view('services.scanning-and-indexing', $data);
    }
    public function cctv_monitoring_services()
    {
        $data['meta_title'] = 'CCTV Monitoring Services - Allianze Digital';
        $data['meta_keywords'] = 'CCTV monitoring services, surveillance solutions, security monitoring, Allianze Digital';
        return view('services.cctv-monitoring-services', $data);
    }
    public function data_analytics_and_business_intelligence()
    {
        $data['meta_title'] = 'Data Analytics and Business Intelligence - Allianze Digital';
        $data['meta_keywords'] = 'data analytics, business intelligence, data visualization, Allianze Digital';
        return view('services.data-analytics-and-business-intelligence', $data);
    }
    public function data_collection()
    {
        $data['meta_title'] = 'Data Collection - Allianze Digital';
        $data['meta_keywords'] = 'data collection, data gathering, data acquisition, Allianze Digital';
        return view('services.data-collection', $data); 
    }
    public function process_optimization()
    {
        $data['meta_title'] = 'Process Optimization - Allianze Digital';
        $data['meta_keywords'] = 'process optimization, workflow improvement, efficiency enhancement, Allianze Digital';
        return view('services.process-optimization', $data);
    }
    public function digital_transformation_services()
    {
        $data['meta_title'] = 'Digital Transformation Services - Allianze Digital';
        $data['meta_keywords'] = 'digital transformation services, business transformation, technology adoption, Allianze Digital';
        return view('services.digital-transformation-services', $data);
    }
    public function document_and_records_management()
    {
        $data['meta_title'] = 'Document and Records Management - Allianze Digital';
        $data['meta_keywords'] = 'document management, records management, information governance, Allianze Digital';
        return view('services.document-and-records-management', $data);
    }
    public function performance_management()
    {
        $data['meta_title'] = 'Performance Management - Allianze Digital';
        $data['meta_keywords'] = 'performance management, employee performance, performance evaluation, Allianze Digital';
        return view('services.performance-management', $data);  
    }
    public function virtual_assistant()
    {
        $data['meta_title'] = 'Virtual Assistant - Allianze Digital';
        $data['meta_keywords'] = 'virtual assistant, AI assistant, digital assistant, Allianze Digital';
        return view('services.virtual-assistant', $data);  
    }
    public function virtual_accounting()
    {
        $data['meta_title'] = 'Virtual Accounting - Allianze Digital';
        $data['meta_keywords'] = 'virtual accounting, online accounting, remote accounting, Allianze Digital';
        return view('services.virtual-accounting', $data);
    }
    public function bookkeeping_services()
    {
        $data['meta_title'] = 'Bookkeeping Services - Allianze Digital';
        $data['meta_keywords'] = 'bookkeeping services, financial record keeping, accounting support, Allianze Digital';
        return view('services.bookkeeping-services', $data);
    }
    public function tax_management_preparation()
    {
        $data['meta_title'] = 'Tax Management Preparation - Allianze Digital';
        $data['meta_keywords'] = 'tax management preparation, tax planning, tax compliance, Allianze Digital';
        return view('services.tax-management-preparation', $data);  
    }
    public function audit_support_services()
    {
        $data['meta_title'] = 'Audit Support Services - Allianze Digital';
        $data['meta_keywords'] = 'audit support services, audit preparation, audit assistance, Allianze Digital';
        return view('services.audit-support-services', $data);  
    }
    public function remote_engineering_support()
    {
        $data['meta_title'] = 'Remote Engineering Support - Allianze Digital';
        $data['meta_keywords'] = 'remote engineering support, technical support, engineering assistance, Allianze Digital';
        return view('services.remote-engineering-support', $data);
    }
    public function circuit_design_pcb_layout()
    {
        $data['meta_title'] = 'Circuit Design and PCB Layout - Allianze Digital';
        $data['meta_keywords'] = 'circuit design, PCB layout, electronic design, Allianze Digital';
        return view('services.circuit-design-pcb-layout', $data);
    }
    public function cad_and_simulation_service()
    {
        $data['meta_title'] = 'CAD and Simulation Service - Allianze Digital';
        $data['meta_keywords'] = 'CAD service, simulation service, computer-aided design, Allianze Digital';
        return view('services.cad-and-simulation-service', $data);
    }
    public function testing_and_quality_assurance(){
        $data['meta_title'] = 'Testing and Quality Assurance Service - Allianze Digital';
        $data['meta_keywords'] = 'Quality service, Testing service, computer-aided design, Allianze Digital';
        return view('services.testing-and-quality-assurance', $data);
    }
    public function software_development_service(){
        $data['meta_title'] = 'Software Development and Maintenance - Allianze Digital';
        $data['meta_keywords'] = 'Software Development, Software Maintenance, computer-aided design, Allianze Digital';
        return view('services.software-development-service', $data);
    }
    public function website_development_service(){
        $data['meta_title'] = 'Web Development and Maintenance - Allianze Digital';
        $data['meta_keywords'] = 'Web Development, Web Maintenance, computer-aided design, Allianze Digital';
        return view('services.website-development-service', $data);
    }
    public function web_app_development_service(){
        $data['meta_title'] = 'Web Application Development and Maintenance - Allianze Digital';
        $data['meta_keywords'] = 'Web Application Development, Web Application Maintenance, computer-aided design, Allianze Digital';
        return view('services.web-app-development-service', $data);
    }
    public function seo_services(){
        $data['meta_title'] = 'SEO Services - Allianze Digital';
        $data['meta_keywords'] = 'SEO services, search engine optimization, digital marketing, Allianze Digital';
        return view('services.seo-services', $data);
    }
    public function smm_services(){
        $data['meta_title'] = 'SMM Services - Allianze Digital';
        $data['meta_keywords'] = 'SMM services, social media marketing, digital marketing, Allianze Digital';
        return view('services.smm-services', $data);
    }
    public function content_writing_service(){
        $data['meta_title'] = 'Content Writing Services - Allianze Digital';
        $data['meta_keywords'] = 'content writing services, copywriting, digital marketing, Allianze Digital';
        return view('services.content-writing-service', $data);
    }
    public function image_editing_service(){
        $data['meta_title'] = 'Image Editing Services - Allianze Digital';
        $data['meta_keywords'] = 'image editing services, photo retouching, digital marketing, Allianze Digital';
        return view('services.image-editing-service', $data);
    }

}
