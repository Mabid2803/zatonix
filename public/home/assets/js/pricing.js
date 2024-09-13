document.addEventListener('DOMContentLoaded', function() {
    const appointments = document.getElementById('appointments');
    const conversionRate = document.getElementById('conversion-rate');
    const contractValue = document.getElementById('contract-value');
    const salesCycle = document.getElementById('sales-cycle');

    const appointmentsValue = document.getElementById('appointments-value');
    const conversionRateValue = document.getElementById('conversion-rate-value');
    const contractValueValue = document.getElementById('contract-value-value');
    const salesCycleValue = document.getElementById('sales-cycle-value');
    console.log(salesCycle)

    const outputAppointments = document.getElementById('output-appointments');
    const outputDeals = document.getElementById('output-deals');
    const outputRevenue = document.getElementById('output-revenue');
    const outputRoi = document.getElementById('output-roi');
    const outputSalesCycle = document.getElementById('output-sales-cycle');

    function calculateOutput() {
        const appointmentsPerMonth = parseInt(appointments.value);
        const conversionRatePercent = parseInt(conversionRate.value);
        const annualContractValue = parseInt(contractValue.value);
        const cycleLength = parseInt(salesCycle.value);

        // Calculate the number of deals per month
        const dealsPerMonth = Math.round((appointmentsPerMonth * conversionRatePercent) / 100);
        // Calculate the annual revenue based on deals per month and contract value
        const annualRevenue = dealsPerMonth * annualContractValue;
        // Set ROI to a fixed value (you can change it as per your need)
        const roi = 190;  

        // Update the slider display values
        appointmentsValue.textContent = appointmentsPerMonth;
        conversionRateValue.textContent = `${conversionRatePercent}%`;
        contractValueValue.textContent = `$${annualContractValue.toLocaleString()}`;
        salesCycleValue.textContent = `${cycleLength} mo`;

        // Update the output display values
        outputAppointments.textContent = appointmentsPerMonth;
        outputDeals.textContent = dealsPerMonth;
        outputRevenue.textContent = `$${annualRevenue.toLocaleString()}`;
        outputSalesCycle.textContent = `${cycleLength} months`;
        outputRoi.textContent = `${roi}%`;



        salesCycle.addEventListener("click", calculateOutput);
        console.log(salesCycle.value)
    }


    // Add event listeners for all sliders
    appointments.addEventListener('input', calculateOutput);
    conversionRate.addEventListener('input', calculateOutput);
    contractValue.addEventListener('input', calculateOutput);
    salesCycle.addEventListener('input', calculateOutput);

    // Initial calculation to set the default values
    calculateOutput();
});
