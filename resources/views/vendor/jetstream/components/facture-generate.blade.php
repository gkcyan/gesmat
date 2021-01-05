
<div class="h-2 border-t-8 border-gray-700"></div>
	<div 
		class="container px-4 py-6 mx-auto"
		x-data="invoices()"
		x-init="generateInvoiceNumber(111111, 999999);"
		x-cloak
	>
		<div class="flex justify-between">
			<h2 class="pb-2 mb-6 text-2xl font-bold tracking-wider uppercase">Invoice</h2>
			<div>
				<div class="relative inline-block mr-4">
					<div class="inline-flex items-center justify-center w-10 h-10 text-gray-500 bg-gray-100 rounded-full cursor-pointer hover:bg-gray-300" @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="printInvoice()">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
							<path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
							<rect x="7" y="13" width="10" height="8" rx="2" />
						</svg>				  
					</div>
					<div x-show.transition="showTooltip" class="absolute top-0 right-0 z-40 block w-32 p-2 mt-12 text-xs text-center text-white bg-gray-800 rounded-lg shadow-lg">
						Print this invoice!
					</div>
				</div>
				
				<div class="relative inline-block">
					<div class="inline-flex items-center justify-center w-10 h-10 text-gray-500 bg-gray-100 rounded-full cursor-pointer hover:bg-gray-300" @mouseenter="showTooltip2 = true" @mouseleave="showTooltip2 = false" @click="window.location.reload()">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -5v5h5" />
							<path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 5v-5h-5" />
						</svg>	  
					</div>
					<div x-show.transition="showTooltip2" class="absolute top-0 right-0 z-40 block w-32 p-2 mt-12 text-xs text-center text-white bg-gray-800 rounded-lg shadow-lg">
						Reload Page
					</div>
				</div>
			</div>
		</div>

		<div class="flex justify-between mb-8">
			<div class="w-2/4">
				<div class="items-center mb-2 md:mb-1 md:flex">
					<label class="block w-32 text-sm font-bold tracking-wide text-gray-800 uppercase">Invoice No.</label>
					<span class="hidden inline-block mr-4 md:block">:</span>
					<div class="flex-1">
					<input class="w-48 px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="eg. #INV-100001" x-model="invoiceNumber">
					</div>
				</div>

				<div class="items-center mb-2 md:mb-1 md:flex">
					<label class="block w-32 text-sm font-bold tracking-wide text-gray-800 uppercase">Invoice Date</label>
					<span class="hidden inline-block mr-4 md:block">:</span>
					<div class="flex-1">
					<input class="w-48 px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500 js-datepicker" type="text" id="datepicker1" placeholder="eg. 17 Feb, 2020" x-model="invoiceDate" x-on:change="invoiceDate = document.getElementById('datepicker1').value" autocomplete="off" readonly>
					</div>
				</div>

				<div class="items-center mb-2 md:mb-1 md:flex">
					<label class="block w-32 text-sm font-bold tracking-wide text-gray-800 uppercase">Due date</label>
					<span class="hidden inline-block mr-4 md:block">:</span>
					<div class="flex-1">
					<input class="w-48 px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500 js-datepicker-2" id="datepicker2" type="text" placeholder="eg. 17 Mar, 2020" x-model="invoiceDueDate" x-on:change="invoiceDueDate = document.getElementById('datepicker2').value" autocomplete="off" readonly>
					</div>
				</div>
			</div>
			<div>
				<div class="relative w-32 h-32 mb-1 overflow-hidden bg-gray-100 border rounded-lg">
					<img id="image" class="object-cover w-full h-32" src="https://placehold.co/300x300/e2e8f0/e2e8f0" />
					
					<div class="absolute top-0 bottom-0 left-0 right-0 flex items-center justify-center block w-full cursor-pointer" onClick="document.getElementById('fileInput').click()">
						<button type="button"
							style="background-color: rgba(255, 255, 255, 0.65)"
							class="px-4 py-2 text-sm font-semibold text-gray-700 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100"
						>
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
								<circle cx="12" cy="13" r="3" />
							</svg>							  
						</button>
					</div>
				</div>
				<input name="photo" id="fileInput" accept="image/*" class="hidden" type="file" onChange="let file = this.files[0]; 
					var reader = new FileReader();

					reader.onload = function (e) {
						document.getElementById('image').src = e.target.result;
						document.getElementById('image2').src = e.target.result;
					};
				
					reader.readAsDataURL(file);
				">
			</div>
		</div>

		<div class="flex flex-wrap justify-between mb-8">
			<div class="w-full mb-2 md:w-1/3 md:mb-0">
				<label class="block mb-1 text-sm font-bold tracking-wide text-gray-800 uppercase">Bill/Ship To:</label>
				<input class="w-full px-4 py-2 mb-1 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Billing company name" x-model="billing.name">
				<input class="w-full px-4 py-2 mb-1 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Billing company address" x-model="billing.address">
				<input class="w-full px-4 py-2 mb-1 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Additional info" x-model="billing.extra">
			</div>
			<div class="w-full md:w-1/3">
				<label class="block mb-1 text-sm font-bold tracking-wide text-gray-800 uppercase">From:</label>
				<input class="w-full px-4 py-2 mb-1 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Your company name" x-model="from.name">

				<input class="w-full px-4 py-2 mb-1 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Your company address" x-model="from.address">

				<input class="w-full px-4 py-2 mb-1 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Additional info" x-model="from.extra">
			</div>
		</div>

		<div class="flex items-start py-2 -mx-1 border-b">
			<div class="flex-1 px-1">
				<p class="text-sm font-bold tracking-wide text-gray-800 uppercase">Description</p>
			</div>

			<div class="w-20 px-1 text-right">
				<p class="text-sm font-bold tracking-wide text-gray-800 uppercase">Units</p>
			</div>

			<div class="w-32 px-1 text-right">
				<p class="leading-none">
					<span class="block text-sm font-bold tracking-wide text-gray-800 uppercase">Unit Price</span>
					<span class="text-xs font-medium text-gray-500">(Incl. GST)</span>
				</p>
			</div>

			<div class="w-32 px-1 text-right">
				<p class="leading-none">
					<span class="block text-sm font-bold tracking-wide text-gray-800 uppercase">Amount</span>
					<span class="text-xs font-medium text-gray-500">(Incl. GST)</span>
				</p>
			</div>

			<div class="w-20 px-1 text-center">
			</div>
		</div>
	    <template x-for="invoice in items" :key="invoice.id">
			<div class="flex py-2 -mx-1 border-b">
				<div class="flex-1 px-1">
					<p class="text-gray-800" x-text="invoice.name"></p>
				</div>

				<div class="w-20 px-1 text-right">
					<p class="text-gray-800" x-text="invoice.qty"></p>
				</div>

				<div class="w-32 px-1 text-right">
					<p class="text-gray-800" x-text="numberFormat(invoice.rate)"></p>
				</div>

				<div class="w-32 px-1 text-right">
					<p class="text-gray-800" x-text="numberFormat(invoice.total)"></p>
				</div>

				<div class="w-20 px-1 text-right">
					<a href="#" class="text-sm font-semibold text-red-500 hover:text-red-600" @click.prevent="deleteItem(invoice.id)">Delete</a>
				</div>
			</div>
		</template>

		<button class="px-4 py-2 mt-6 text-sm font-semibold text-gray-700 bg-white border border-gray-300 rounded shadow-sm hover:bg-gray-100" x-on:click="openModal = !openModal">
			Add Invoice Items
		</button>

		<div class="w-full py-2 mt-5 ml-auto sm:w-2/4 lg:w-1/4">
			<div class="flex justify-between mb-3">
				<div class="flex-1 text-right text-gray-800">Total incl. GST</div>
				<div class="w-40 text-right">
					<div class="font-medium text-gray-800" x-html="netTotal"></div>
				</div>
			</div>
			<div class="flex justify-between mb-4">
				<div class="flex-1 text-sm text-right text-gray-600">GST(18%) incl. in Total</div>
				<div class="w-40 text-right">
					<div class="text-sm text-gray-600" x-html="totalGST"></div>
				</div>
			</div>
		
			<div class="py-2 border-t border-b">
				<div class="flex justify-between">
					<div class="flex-1 text-xl text-right text-gray-600">Amount due</div>
					<div class="w-40 text-right">
						<div class="text-xl font-bold text-gray-800" x-html="netTotal"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="py-10 text-center">
			<p class="text-gray-600">Created by <a class="text-blue-600 border-b-2 border-blue-200 hover:text-blue-500 hover:border-blue-300" href="https://twitter.com/mithicher">@mithicher</a>. Built with <a class="text-blue-600 border-b-2 border-blue-200 hover:text-blue-500 hover:border-blue-300" href="https://tailwindcss.com/">tailwindCSS</a> and <a href="https://github.com/alpinejs/alpine" class="text-blue-600 border-b-2 border-blue-200 hover:text-blue-500 hover:border-blue-300">AlpineJS</a>. SVG icons from <a href="https://github.com/tabler/tabler-icons" class="text-blue-600 border-b-2 border-blue-200 hover:text-blue-500 hover:border-blue-300">Tabler Icons</a>.</p>
		</div>

		<!-- Print Template -->
		<div id="js-print-template" x-ref="printTemplate" class="hidden">
			<div class="flex justify-between mb-8">
				<div>
					<h2 class="pb-2 mb-6 text-3xl font-bold tracking-wider uppercase">Invoice</h2>

					<div class="flex items-center mb-1">
						<label class="block w-32 text-xs font-bold tracking-wide text-gray-800 uppercase">Invoice No.</label>
						<span class="inline-block mr-4">:</span>
						<div x-text="invoiceNumber"></div>
					</div>
		
					<div class="flex items-center mb-1">
						<label class="block w-32 text-xs font-bold tracking-wide text-gray-800 uppercase">Invoice Date</label>
						<span class="inline-block mr-4">:</span>
						<div x-text="invoiceDate"></div>
					</div>
		
					<div class="flex items-center mb-1">
						<label class="block w-32 text-xs font-bold tracking-wide text-gray-800 uppercase">Due date</label>
						<span class="inline-block mr-4">:</span>
						<div x-text="invoiceDueDate"></div>
					</div>
				</div>
				<div class="pr-5">
					<div class="w-32 h-32 mb-1 overflow-hidden">
						<img id="image2" class="object-cover w-20 h-20" />
					</div>
				</div>
			</div>

			<div class="flex justify-between mb-10">
				<div class="w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide text-gray-800 uppercase">Bill/Ship To:</label>
					<div>
						<div x-text="billing.name"></div>
						<div x-text="billing.address"></div>
						<div x-text="billing.extra"></div>
					</div>
				</div>
				<div class="w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide text-gray-800 uppercase">From:</label>
					<div>
						<div x-text="from.name"></div>
						<div x-text="from.address"></div>
						<div x-text="from.extra"></div>
					</div>
				</div>
			</div>

			<div class="flex flex-wrap items-start py-2 -mx-1 border-b">
				<div class="flex-1 px-1">
					<p class="text-xs font-bold tracking-wide text-gray-600 uppercase">Description</p>
				</div>
	
				<div class="w-32 px-1 text-right">
					<p class="text-xs font-bold tracking-wide text-gray-600 uppercase">Units</p>
				</div>
	
				<div class="w-32 px-1 text-right">
					<p class="leading-none">
						<span class="block text-xs font-bold tracking-wide text-gray-600 uppercase">Unit Price</span>
						<span class="text-xs font-medium text-gray-500">(Incl. GST)</span>
					</p>
				</div>
	
				<div class="w-32 px-1 text-right">
					<p class="leading-none">
						<span class="block text-xs font-bold tracking-wide text-gray-600 uppercase">Amount</span>
						<span class="text-xs font-medium text-gray-500">(Incl. GST)</span>
					</p>
				</div>
			</div>
			<template x-for="invoice in items" :key="invoice.id">
				<div class="flex flex-wrap py-2 -mx-1 border-b">
					<div class="flex-1 px-1">
						<p class="text-gray-800" x-text="invoice.name"></p>
					</div>
	
					<div class="w-32 px-1 text-right">
						<p class="text-gray-800" x-text="invoice.qty"></p>
					</div>
	
					<div class="w-32 px-1 text-right">
						<p class="text-gray-800" x-text="numberFormat(invoice.rate)"></p>
					</div>
	
					<div class="w-32 px-1 text-right">
						<p class="text-gray-800" x-text="numberFormat(invoice.total)"></p>
					</div>
				</div>
			</template>

			<div class="py-2 mt-20 ml-auto" style="width: 320px">
				<div class="flex justify-between mb-3">
					<div class="flex-1 text-right text-gray-800">Total incl. GST</div>
					<div class="w-40 text-right">
						<div class="font-medium text-gray-800" x-html="netTotal"></div>
					</div>
				</div>
				<div class="flex justify-between mb-4">
					<div class="flex-1 text-sm text-right text-gray-600">GST(18%) incl. in Total</div>
					<div class="w-40 text-right">
						<div class="text-sm text-gray-600" x-html="totalGST"></div>
					</div>
				</div>
			
				<div class="py-2 border-t border-b">
					<div class="flex justify-between">
						<div class="flex-1 text-xl text-right text-gray-600">Amount due</div>
						<div class="w-40 text-right">
							<div class="text-xl font-bold text-gray-800" x-html="netTotal"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Print Template -->

		<!-- Modal -->
		<div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed top-0 bottom-0 left-0 right-0 z-40 w-full h-full" x-show.transition.opacity="openModal">
			<div class="absolute relative left-0 right-0 max-w-xl p-4 mx-auto mt-24 overflow-hidden">
				<div class="absolute top-0 right-0 inline-flex items-center justify-center w-10 h-10 text-gray-500 bg-white rounded-full shadow cursor-pointer hover:text-gray-800"
					x-on:click="openModal = !openModal">
					<svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path
							d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
					</svg>
				</div>

				<div class="block w-full p-8 overflow-hidden bg-white rounded-lg shadow">
					
					<h2 class="pb-2 mb-6 text-2xl font-bold text-gray-800 border-b">Fill your services</h2>
				 
					<div class="mb-4">
						<label class="block mb-1 text-sm font-bold tracking-wide text-gray-800 uppercase">Description</label>
						<input class="w-full px-4 py-2 mb-1 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" x-model="item.name">
					</div>

					<div class="flex">
						<div class="w-32 mb-4 mr-2">
							<label class="block mb-1 text-sm font-bold tracking-wide text-gray-800 uppercase">Units</label>
							<input class="w-full px-4 py-2 mb-1 leading-tight text-right text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" x-model="item.qty">
						</div>
			
						<div class="w-32 mb-4 mr-2">
							<label class="block mb-1 text-sm font-bold tracking-wide text-gray-800 uppercase">Unit Price</label>
							<input class="w-full px-4 py-2 mb-1 leading-tight text-right text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" x-model="item.rate">
						</div>

						<div class="w-32 mb-4">
							<label class="block mb-1 text-sm font-bold tracking-wide text-gray-800 uppercase">Amount</label>
							<input class="w-full px-4 py-2 mb-1 leading-tight text-right text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" x-model="item.total = item.qty * item.rate">
						</div>
					</div>
			
					<div class="w-32 mb-4"> 
						<div class="relative">
							<label class="block mb-1 text-sm font-bold tracking-wide text-gray-800 uppercase">GST</label>
							<select class="block w-full px-4 py-2 pr-8 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-blue-500" x-model="item.gst">
								<option value="5">GST 5%</option>
								<option value="12">GST 12%</option>
								<option value="18">GST 18%</option>
								<option value="28">GST 28%</option>
							</select>
							<div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-600 pointer-events-none">
								<svg class="w-4 h-4 mt-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
							</div>
						</div>
					</div>
	
					<div class="mt-8 text-right">
						<button type="button" class="px-4 py-2 mr-2 font-semibold text-gray-700 bg-white border border-gray-300 rounded shadow-sm hover:bg-gray-100" @click="openModal = !openModal">
							Cancel
						</button>	
						<button type="button" class="px-4 py-2 font-semibold text-white bg-gray-800 border border-gray-700 rounded shadow-sm hover:bg-gray-700" @click="addItem()">
							Add Item
						</button>	
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->

	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
	<script>
        window.addEventListener('DOMContentLoaded', function() {
			const today = new Date();
		
            var picker = new Pikaday({
				keyboardInput: false,
				field: document.querySelector('.js-datepicker'),
				format: 'MMM D YYYY',
				theme: 'date-input',
				i18n: {
					previousMonth: "Prev",
					nextMonth: "Next",
					months: [
						"Jan",
						"Feb",
						"Mar",
						"Apr",
						"May",
						"Jun",
						"Jul",
						"Aug",
						"Sep",
						"Oct",
						"Nov",
						"Dec"
					],
					weekdays: [
						"Sunday",
						"Monday",
						"Tuesday",
						"Wednesday",
						"Thursday",
						"Friday",
						"Saturday"
					],
					weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
				}
			});
			picker.setDate(new Date());

			var picker2 = new Pikaday({
				keyboardInput: false,
				field: document.querySelector('.js-datepicker-2'),
				format: 'MMM D YYYY',
				theme: 'date-input',
				i18n: {
					previousMonth: "Prev",
					nextMonth: "Next",
					months: [
						"Jan",
						"Feb",
						"Mar",
						"Apr",
						"May",
						"Jun",
						"Jul",
						"Aug",
						"Sep",
						"Oct",
						"Nov",
						"Dec"
					],
					weekdays: [
						"Sunday",
						"Monday",
						"Tuesday",
						"Wednesday",
						"Thursday",
						"Friday",
						"Saturday"
					],
					weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
				}
			});
			picker2.setDate(new Date());
		});

		function invoices() {
			return {
				items: [],
				invoiceNumber: 0,
				invoiceDate: '',
				invoiceDueDate: '',

				totalGST: 0,
				netTotal: 0,

				item: {
					id: '',
					name: '',
					qty: 0,
					rate: 0,
					total: 0,
					gst: 18
				},

				billing: {
					name: '',
					address: '',
					extra: ''
				},
				from: {
					name: '',
					address: '',
					extra: ''
				},

				showTooltip: false,
				showTooltip2: false,
				openModal: false,

				addItem() {
					this.items.push({
						id: this.generateUUID(),
						name: this.item.name,
						qty: this.item.qty,
						rate: this.item.rate,
						gst: this.calculateGST(this.item.gst, this.item.rate),
						total: this.item.qty * this.item.rate
					})

					this.itemTotal();
					this.itemTotalGST();

					this.item.id = '';
					this.item.name = '';
					this.item.qty = 0;
					this.item.rate = 0;
					this.item.gst = 18;
					this.item.total = 0;
				},

				deleteItem(uuid) {
					this.items = this.items.filter(item => uuid !== item.id);

					this.itemTotal();
					this.itemTotalGST();
				},

				itemTotal() {
					this.netTotal = this.numberFormat(this.items.length > 0 ? this.items.reduce((result, item) => {
						return result + item.total;
					}, 0) : 0);
				},

				itemTotalGST() {
                    this.totalGST =  this.numberFormat(this.items.length > 0 ? this.items.reduce((result, item) => {
						return result + (item.gst * item.qty);
					}, 0) : 0);
				},

				calculateGST(GSTPercentage, itemRate) {
					return this.numberFormat((itemRate - (itemRate * (100 / (100 + GSTPercentage)))).toFixed(2));
				},

				generateUUID() {
					return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
						var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
						return v.toString(16);
					});
				},

				generateInvoiceNumber(minimum, maximum) {
					const randomNumber = Math.floor(Math.random() * (maximum - minimum)) + minimum;
					this.invoiceNumber = '#INV-'+ randomNumber;
				},

				numberFormat(amount) {
					return amount.toLocaleString("en-US", {
						style: "currency",
						currency: "INR"
					});
				},

				printInvoice() {
					var printContents = this.$refs.printTemplate.innerHTML;
					var originalContents = document.body.innerHTML;

					document.body.innerHTML = printContents;
					window.print();
					document.body.innerHTML = originalContents;
				}
			}
		}
	</script>
