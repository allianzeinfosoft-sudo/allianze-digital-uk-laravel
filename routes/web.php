<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/who-we-are', [AboutUsController::class, 'index'])->name('who-we-are');

Route::get('/legal-data-processing', [ServiceController::class, 'legal_data_processing'])->name('legal-data-processing');
Route::get('/insurance-data-processing', [ServiceController::class, 'insurance_data_processing'])->name('insurance-data-processing');
Route::get('/logistics-data-processing', [ServiceController::class, 'logistics_data_processing'])->name('logistics-data-processing');
Route::get('/healthcare-data-processing', [ServiceController::class, 'healthcare_data_processing'])->name('healthcare-data-processing');
Route::get('/scanning-and-indexing', [ServiceController::class, 'scanning_and_indexing'])->name('scanning-and-indexing');
Route::get('/cctv-monitoring-services', [ServiceController::class, 'cctv_monitoring_services'])->name('cctv-monitoring-services');
Route::get('/data-analytics-and-business-intelligence', [ServiceController::class, 'data_analytics_and_business_intelligence'])->name('data-analytics-and-business-intelligence');
Route::get('/data-collection', [ServiceController::class, 'data_collection'])->name('data-collection');

Route::get('/process-optimization', [ServiceController::class, 'process_optimization'])->name('process-optimization');
Route::get('/digital-transformation-services', [ServiceController::class, 'digital_transformation_services'])->name('digital-transformation-services');
Route::get('/document-and-records-management', [ServiceController::class, 'document_and_records_management'])->name('document-and-records-management');
Route::get('/performance-management', [ServiceController::class, 'performance_management'])->name('performance-management');
Route::get('/virtual-assistant', [ServiceController::class, 'virtual_assistant'])->name('virtual-assistant');
Route::get('/virtual-accounting', [ServiceController::class, 'virtual_accounting'])->name('virtual-accounting');
Route::get('/bookkeeping-services', [ServiceController::class, 'bookkeeping_services'])->name('bookkeeping-services');
Route::get('/tax-management-preparation', [ServiceController::class, 'tax_management_preparation'])->name('tax-management-preparation');
Route::get('/audit-support-services', [ServiceController::class, 'audit_support_services'])->name('audit-support-services');

Route::get('/remote-engineering-support', [ServiceController::class, 'remote_engineering_support'])->name('remote-engineering-support');
Route::get('/circuit-design-pcb-layout', [ServiceController::class, 'circuit_design_pcb_layout'])->name('circuit-design-pcb-layout');
Route::get('/cad-and-simulation-service', [ServiceController::class, 'cad_and_simulation_service'])->name('cad-and-simulation-service');
Route::get('/testing-and-quality-assurance', [ServiceController::class, 'testing_and_quality_assurance'])->name('testing-and-quality-assurance');
Route::get('/software-development-service', [ServiceController::class, 'software_development_service'])->name('software-development-service');
Route::get('/website-development-service', [ServiceController::class, 'website_development_service'])->name('website-development-service');
Route::get('/web-app-development-service', [ServiceController::class, 'web_app_development_service'])->name('web-app-development-service');

Route::get('/seo-services', [ServiceController::class, 'seo_services'])->name('seo-services');
Route::get('/smm-services', [ServiceController::class, 'smm_services'])->name('smm-services');
Route::get('/content-writing-service', [ServiceController::class, 'content_writing_service'])->name('content-writing-service');
Route::get('/image-editing-service', [ServiceController::class, 'image_editing_service'])->name('image-editing-service');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactUsController::class, 'submit'])->name('contact-us.submit');


