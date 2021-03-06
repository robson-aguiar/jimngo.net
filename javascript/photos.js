const listing = {
    AssociationFee: 0,
    BathroomsTotalInteger: 2,
    BedroomsTotal: 4,
    City: "Ontario",
    AssociationFee: 0,
    BathroomsTotalInteger: 2,
    BedroomsTotal: 4,
    City: "Ontario",
    Cooling: "CA",
    DaysOnMarket: 15,
    Heating: "CF",
    ListPrice: 520000,
    ListingId: "PW20076943",
    ListingKeyNumeric: 364234407,
    LivingArea: 1645,
    MajorChangeType: "New Listing",
    OriginalListPrice: 520000,
    PhotosCount: 25,
    PostalCode: "91762",
    PropertySubType: "Single Family",
    PropertyType: "Residential",
    PublicRemarks: "Beautiful and Upgraded Home in a nice area of South Ontario . Recently remodeling with new interior paint, new Laminate Wood Flooring through-out. Tile flooring in all Bathrooms and Hallways. Kitchen upgraded with new White Cabinets, new Counter Tops and new Window. All Bathrooms upgraded with Tile Flooring and new Vanities. Large Living Room with Cozy Fireplace.  Spacious Family Room open to large Backyard. Large corner lot with  spacious Front and Backyards. A must see ! Ready to move in!",
    SpecialListingConditions: "Standard",
    StandardStatus: "Active",
    StreetName: "Bermuda Dunes",
    StreetNumberNumeric: 223,
    StreetSuffix: "ST",
    YearBuilt: 1978
};

const photoURLs = ["https://media.crmls.org/medias/e975c49e-b88a-46b3-b67d-04877f61cfd6.jpg", "https://media.crmls.org/medias/3eb74018-5b3e-4dab-8853-0c59ea0c1996.jpg", "https://media.crmls.org/medias/8cea855b-c1ef-41f6-9be5-170de2309631.jpg", "https://media.crmls.org/medias/a1e55b08-7ab5-4737-a6a2-18b90b2481a8.jpg", "https://media.crmls.org/medias/e2afb610-37c1-4091-98a3-1c69c8758c15.jpg", "https://media.crmls.org/medias/d5a8b4bc-b4e6-41cc-8b23-1e4c1e6e46e6.jpg", "https://media.crmls.org/medias/d9f7a46a-ad9c-4134-9db1-2ec5dbcf4081.jpg", "https://media.crmls.org/medias/776dd5ad-30d9-44e1-9a11-3753ff178093.jpg", "https://media.crmls.org/medias/d7c0bf4d-9517-4c4c-8ea7-438aebf8b111.jpg", "https://media.crmls.org/medias/84a36988-3efe-4715-8f04-4684b6823414.jpg", "https://media.crmls.org/medias/77cf066a-57d5-40e1-a434-614e81e26d40.jpg", "https://media.crmls.org/medias/2b2cd1ba-76b3-4230-bbc4-65389283b7ab.jpg", "https://media.crmls.org/medias/ed8733bf-68c1-47d0-8b20-66bbcd640363.jpg", "https://media.crmls.org/medias/0be36147-4571-40aa-8dcc-670576114131.jpg", "https://media.crmls.org/medias/3ad36fb0-b847-43a1-ae62-7672f0913d62.jpg", "https://media.crmls.org/medias/c7b3140d-5f80-48e5-8e24-79c524dc7240.jpg", "https://media.crmls.org/medias/0f3a63d4-36d6-4c56-a485-7d2ffe51115c.jpg", "https://media.crmls.org/medias/a7597373-54a6-4285-8932-82fa4a165967.jpg", "https://media.crmls.org/medias/e83bbbaf-9637-4dca-8ba7-8ee44ff9509f.jpg", "https://media.crmls.org/medias/e8454ccb-c4dc-4d51-82dc-9cbdefb16b45.jpg", "https://media.crmls.org/medias/a202a0d1-9696-4cb3-93eb-a5557dda44bc.jpg", "https://media.crmls.org/medias/2fe52f20-1bfa-4cfd-97d9-a724e0e743d3.jpg", "https://media.crmls.org/medias/6832cde7-fc0c-48b9-975c-afa8367269d8.jpg", "https://media.crmls.org/medias/053c6960-23be-498e-b685-ba11cdf64497.jpg", "https://media.crmls.org/medias/aedabe2e-f602-41cc-91fb-c64d14b84d2c.jpg", "https://media.crmls.org/medias/48e79a34-2bb3-4641-851e-d9a4e1e4067c.jpg", "https://media.crmls.org/medias/3cbac095-7786-4daf-805e-dc0b6e64b378.jpg", "https://media.crmls.org/medias/8254e8b5-1e0f-4ee7-a673-dcf2c990dd86.jpg", "https://media.crmls.org/medias/a56064cb-5359-4d18-8686-e61baad4c8f1.jpg", "https://media.crmls.org/medias/e280f8f4-447b-4cad-bc85-e9492a9222c1.jpg", "https://media.crmls.org/medias/10b233eb-0b4e-4c28-91a9-ec2b33293fcc.jpg"];

var html = `
    <div class="inputTitleContainer">
        <div class="inputTitle font-large">$${listing.ListPrice}</div>
        <div class="inputValue">${listing.MajorChangeType}</div>
    </div>
    <p>
        <div>&ensp;• Listing ID: ${listing.ListingId}</div>
        <div>&ensp;• ${listing.SpecialListingConditions}</div>
        <div>&ensp;• ${listing.DaysOnMarket} Days On Market</div>
        <div>&ensp;• ${listing.BedroomsTotal} Beds • ${listing.BathroomsTotalInteger} Baths • ${listing.LivingArea} sqft</div>
        <div>&ensp;${listing.StreetNumberNumeric} ${listing.StreetName} ${listing.StreetSuffix}, ${listing.City} CA ${listing.PostalCode}</div>
    </p>
    <hr>
    <p>${listing.PublicRemarks}</p>
    `;
$('#remarks').append(html);