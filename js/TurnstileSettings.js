/***********************
Constructor
************************/
function TurnstileSettings() {

    // Paths
    this.siteURL = "/";

    // Administration area url
    this.adminURL = "https://lubbock.fulgen.com/";

    // User in the system
    this.ownerId = 7;

    // If ticket fees apply, put the ticket fee here.
    this.ticketFee = {};

    // If you would like to add the ability to request reservations 
    // or wheelchair requests, you can add the ids here.
    this.reservationLinkRequestId = 8;
    this.wheelChairRequestId = 6;

    // Confirmation email information
    this.confirmation = {};
    this.confirmation.bcc = ""; //for multiple addresses, separate with a comma
    this.confirmation.cc = "";
    this.confirmation.subject = "West Texas and Lubbock Railway";
    this.confirmation.path = "Public/LUBConfirmation.aspx";

    // URL for where the pod js, css, and product templates reside  
    this.codeURL = "";

    // URL for the main tickets page. Tickets may appear on 
    // sub pages, so this url is for the default reservation page.
    this.ticketsURL = "https://www.westtexaspolarexpressride.com/buy-tickets";

    // URL for the Choice Selection page
    this.choiceURL = "https://www.westtexaspolarexpressride.com/buy-tickets/choice";

    // URL for the Upgreade Selection page
    this.upgradeURL = "https://www.westtexaspolarexpressride.com/buy-tickets/upgrades";

    // URL for the Cart page
    this.cartURL = "https://www.westtexaspolarexpressride.com/buy-tickets/shopping-cart";

    // URL for the page that will show after a purchase has completed.
    this.purchaseCompleteURL = "https://www.westtexaspolarexpressride.com/buy-tickets/purchase-complete";

    // URL for the Gift Certificates page.
    this.giftCertificateURL = "GiftCertificates.htm";

    // Path for the product template HTML for upgrades and choices
    this.productTemplatePath = "/";

    // Limit for the amount of tickets avaialable for purchase
    this.ticketLimit = 20;

    // Number of minutes to hold tickets for while reserving.
    this.holdMinutes = 10;
    this.ticketBuffer = 10;
    this.salesCutoffDays = 1;
    this.timezone = { timezone: "MST", offset: -6 };
    this.seatFrom = "right";
    
    this.allowComments = true;
    this.allowPromoCodes = true;
    this.allowDiscounts = true;
    this.allowReservationLink = true;

    this.paymentOptions = ["visa", "mastercard","amex","discover"];

    // Paths for navigation. Changing this is unneccessary at this time.
    this.navigationPaths = [this.choiceURL, this.upgradeURL, this.cartURL];

}
