<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function legal_data_processing()
    {
        $data['meta_title'] = 'Best Legal Data Processing Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best legal data processing services in UK, legal document processing UK, legal transcription outsourcing UK, case data entry, secure legal data management, Allianze Digital';
        $data['meta_description'] = 'Allianze Digital provides the best legal data processing services in UK, including case data entry, legal transcription, secure document review, and legal records management solutions.';
        return view('services.legal-data-processing', $data);
    }

    public function insurance_data_processing()
    {
        $data['meta_title'] = 'Best Insurance Claim Data Processing Service in UK | insurance claim bpo agency in UK';
        $data['meta_keywords'] = 'Best insurance claim data processing service in UK, insurance claims outsourcing UK, claims validation, policy management services UK, insurance documentation processing, Allianze Digital insurance BPO';
        $data['meta_description'] = 'Allianze Digital offers the best insurance claim data processing service in UK, covering claims validation, policy management, insurance documentation, and customer support outsourcing.';
        return view('services.insurance-data-processing', $data);
    }
    public function logistics_data_processing()
    {
        $data['meta_title'] = 'Best Logistics & Supply Chain Data Processing Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best logistics data processing services in UK, supply chain outsourcing UK, shipment tracking, warehouse data entry UK, inventory management services, Allianze Digital logistics BPO';
        $data['meta_description'] = 'Allianze Digital delivers the best logistics and supply chain data processing services in UK, including inventory data entry, shipment tracking, warehouse documentation, and supply chain analytics.';
        return view('services.logistics-data-processing', $data);
    }
    public function healthcare_data_processing()
    {
        $data['meta_title'] = 'Best Healthcare Data Processing Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best healthcare data processing services in UK, medical billing outsourcing UK, patient record management, healthcare claims processing UK, hospital data entry, Allianze Digital healthcare BPO';
        $data['meta_description'] = 'Allianze Digital is the best healthcare data processing services company in UK, specializing in medical billing, healthcare claims processing, patient records management, and hospital data entry.';
        return view('services.healthcare-data-processing', $data);
    }
    public function scanning_and_indexing()
    {
        $data['meta_title'] = 'Bulk Document Scanning and Indexing Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Bulk document scanning services UK, indexing services UK, digital archiving outsourcing UK, secure document scanning, bulk record management UK, Allianze Digital document management';
        $data['meta_description'] = 'Allianze Digital provides reliable bulk document scanning and indexing services in UK, offering high-volume scanning, digital archiving, and secure document indexing solutions.';
        return view('services.scanning-and-indexing', $data);
    }
    public function cctv_monitoring_services()
    {
        $data['meta_title'] = 'Best Remote CCTV Monitoring BPO Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best remote CCTV monitoring services UK, CCTV surveillance outsourcing, 24/7 monitoring UK, remote security support, Allianze Digital CCTV BPO services';
        $data['meta_description'] = 'Allianze Digital offers the best remote CCTV monitoring BPO services in UK, ensuring 24/7 surveillance, real-time monitoring, incident reporting, and security support outsourcing.';
        return view('services.cctv-monitoring-services', $data);
    }
    public function data_analytics_and_business_intelligence()
    {
        $data['meta_title'] = 'Best Business Intelligence & Data Analytics Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best business intelligence services UK, data analytics outsourcing UK, predictive analytics UK, BI solutions, data visualization UK, Allianze Digital BI services';
        $data['meta_description'] = 'Allianze Digital delivers the best business intelligence & data analytics services in UK, including predictive analytics, data visualization, reporting solutions, and performance monitoring.';
        return view('services.data-analytics-and-business-intelligence', $data);
    }
    public function data_collection()
    {
        $data['meta_title'] = 'Best Data Analytics and Business Intelligence Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best data analytics services UK, business intelligence outsourcing UK, predictive analytics UK, enterprise reporting UK, Allianze Digital BI services';
        $data['meta_description'] = 'Allianze Digital offers the best data analytics and business intelligence services in UK, including reporting, visualization, predictive analytics, and enterprise data management.';
        return view('services.data-collection', $data); 
    }
    public function process_optimization()
    {
        $data['meta_title'] = 'Best Process Optimization Consulting Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best process optimization consulting services UK, business process consulting UK, workflow optimization services, cost reduction consulting UK, Allianze Digital process improvement';
        $data['meta_description'] = 'Allianze Digital provides the best process optimization consulting service in UK, helping businesses improve efficiency, reduce costs, and streamline workflows through advanced consulting solutions.';
        return view('services.process-optimization', $data);
    }
    public function digital_transformation_services()
    {
        $data['meta_title'] = 'Best Digital Transformation Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best digital transformation services UK, cloud migration UK, AI integration services UK, automation solutions, Allianze Digital digital services';
        $data['meta_description'] = 'Allianze Digital provides the best digital transformation services in UK, helping businesses with automation, AI integration, cloud migration, and end-to-end digital solutions.';
        return view('services.digital-transformation-services', $data);
    }
    public function document_and_records_management()
    {
        $data['meta_title'] = 'Document and Records Management Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Document management services UK, records management UK, document scanning and indexing UK, Allianze Digital document services';
        $data['meta_description'] = 'Allianze Digital offers reliable document and records management services in UK, including document scanning, indexing, archiving, and secure digital storage solutions.';
        return view('services.document-and-records-management', $data);
    }
    public function performance_management()
    {
        $data['meta_title'] = 'Best Performance Management Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best performance management services UK, workforce analytics UK, KPI tracking UK, employee performance services, Allianze Digital performance consulting';
        $data['meta_description'] = 'Best performance management services UK, workforce analytics UK, KPI tracking UK, employee performance services, Allianze Digital performance consulting';
        return view('services.performance-management', $data);  
    }
    public function virtual_assistant()
    {
        $data['meta_title'] = 'Virtual Assistant - Allianze Digital';
        $data['meta_keywords'] = 'virtual assistant, AI assistant, digital assistant, Allianze Digital';
        $data['meta_description'] = '';
        return view('services.virtual-assistant', $data);  
    }
    public function virtual_accounting()
    {
        $data['meta_title'] = 'Best Virtual & Online Accounting Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best virtual assistance BPO services UK, Europe, remote assistant services UK, admin support outsourcing, email management BPO, Allianze Digital virtual assistant';
        $data['meta_description'] = 'Allianze Digital offers the best virtual assistance BPO services in UK and Europe, providing administrative support, scheduling, email management, and remote customer service solutions.';
        return view('services.virtual-accounting', $data);
    }
    public function bookkeeping_services()
    {
        $data['meta_title'] = 'Best Bookkeeping Outsourcing Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'bookkeeping services, financial record keeping, accounting support, Allianze Digital';
        $data['meta_description'] = '';
        return view('services.bookkeeping-services', $data);
    }
    public function tax_management_preparation()
    {
        $data['meta_title'] = 'Best Tax Preparation Outsourcing Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best tax preparation outsourcing service UK, corporate tax filing UK, compliance management UK, tax outsourcing UK, Allianze Digital tax services';
        $data['meta_description'] = 'Allianze Digital provides the best tax preparation outsourcing service in UK, ensuring accurate tax filing, compliance management, corporate tax services, and payroll tax outsourcing.';
        return view('services.tax-management-preparation', $data);  
    }
    public function audit_support_services()
    {
        $data['meta_title'] = 'Best Audit Outsourcing Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'Allianze Digital delivers the best audit outsourcing service in UK, including internal audits, compliance audits, financial audits, and risk management support.';
        $data['meta_description'] = 'Best audit outsourcing service UK, internal audits UK, financial audit outsourcing, compliance audits UK, Allianze Digital audit services';
        return view('services.audit-support-services', $data);  
    }
    public function remote_engineering_support()
    {
        $data['meta_title'] = 'Best Remote Engineering Outsourcing Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best remote engineering outsourcing services UK, CAD drafting outsourcing UK, remote engineering design UK, Allianze Digital engineering services';
        $data['meta_description'] = 'Allianze Digital offers the best remote engineering outsourcing services in UK, covering CAD drafting, engineering design support, documentation, and remote technical assistance.';
        return view('services.remote-engineering-support', $data);
    }
    public function circuit_design_pcb_layout()
    {
        $data['meta_title'] = 'Best PCB Design and Layout Outsourcing Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best PCB design outsourcing service UK, PCB layout services UK, circuit design outsourcing UK, Allianze Digital PCB services';
        $data['meta_description'] = 'Allianze Digital provides the best PCB design and layout outsourcing service in UK, delivering circuit design, PCB layout drafting, prototyping, and manufacturing support.'; 
        return view('services.circuit-design-pcb-layout', $data);
    }
    public function cad_and_simulation_service()
    {
        $data['meta_title'] = 'Best CAD Outsourcing Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best CAD outsourcing services UK, 2D drafting outsourcing UK, 3D modeling services UK, CAD conversion UK, Allianze Digital CAD services';
        $data['meta_description'] = 'Allianze Digital offers the best CAD outsourcing services in UK, including 2D drafting, 3D modeling, CAD conversion, and detailed engineering drawings.';
        return view('services.cad-and-simulation-service', $data);
    }
    public function testing_and_quality_assurance(){
        $data['meta_title'] = 'Testing and Quality Assurance Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'Testing and quality assurance services UK, software QA outsourcing UK, performance testing UK, automation testing services UK, Allianze Digital QA services';
        $data['meta_description'] = 'Allianze Digital provides professional testing and quality assurance services in UK, covering software testing, QA automation, performance testing, and bug fixing solutions.'; 
        return view('services.testing-and-quality-assurance', $data);
    }
    public function software_development_service(){
        $data['meta_title'] = 'Trusted Leading Software Development Company in UK | Allianze Digital';
        $data['meta_keywords'] = 'Trusted software development company in UK, custom software solutions UK, enterprise app development UK, Allianze Digital software services';
        $data['meta_description'] = 'Allianze Digital is a trusted leading software development company in UK, specializing in custom software solutions, enterprise applications, and technology-driven innovations.';
        return view('services.software-development-service', $data);
    }
    public function website_development_service(){
        $data['meta_title'] = 'Best Custom Web Development Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best custom web development services in UK, website development agency UK, eCommerce development UK, CMS solutions UK, Allianze Digital web services';
        $data['meta_description'] = 'Allianze Digital provides the best custom web development services in UK, offering responsive websites, eCommerce platforms, CMS solutions, and tailored web applications.';
        return view('services.website-development-service', $data);
    }
    public function web_app_development_service(){
        $data['meta_title'] = 'Web Application Development Agency in UK | Allianze Digital';
        $data['meta_keywords'] = 'Web application development agency UK, SaaS development UK, custom web apps UK, Allianze Digital application development';
        $data['meta_description'] = 'Allianze Digital is a reliable web application development agency in UK, offering scalable web apps, SaaS platforms, cloud-based applications, and business software solutions.';
        return view('services.web-app-development-service', $data);
    }
    public function seo_services(){
        $data['meta_title'] = 'Best SEO Service Agency in UK, Europe | Allianze Digital';
        $data['meta_keywords'] = 'Best SEO service agency in UK, Europe, search engine optimization UK, link building agency UK, SEO outsourcing Europe, Allianze Digital SEO services';
        $data['meta_description'] = 'Allianze Digital is the best SEO service agency in UK and Europe, delivering keyword optimization, on-page SEO, link building, and result-driven organic ranking solutions.';
        return view('services.seo-services', $data);
    }
    public function smm_services(){
        $data['meta_title'] = 'Best Social Media Marketing Agency in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best social media marketing agency in UK, SMM outsourcing UK, social media ads UK, brand marketing services, Allianze Digital social media services';
        $data['meta_description'] = 'Allianze Digital provides the best social media marketing services in UK, offering campaign management, paid ads, brand engagement, and targeted social media growth strategies.';
        return view('services.smm-services', $data);
    }
    public function content_writing_service(){
        $data['meta_title'] = 'Best Content Writing Services in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best content writing services in UK, SEO content writing UK, copywriting agency UK, website content writing UK, Allianze Digital content services';
        $data['meta_description'] = 'Allianze Digital offers the best content writing services in UK, including SEO blogs, website content, copywriting, and digital content solutions tailored for businesses.';
        return view('services.content-writing-service', $data);
    }
    public function image_editing_service(){
        $data['meta_title'] = 'Best Professional Image Editing and Retouching Service in UK | Allianze Digital';
        $data['meta_keywords'] = 'Best image editing and retouching services UK, professional photo editing UK, product image retouching, background removal UK, Allianze Digital photo editing';
        $data['meta_description'] = 'Allianze Digital delivers the best professional image editing and retouching services in UK, offering photo enhancement, background removal, product image editing, and high-end retouching.';
        return view('services.image-editing-service', $data);
    }

}
