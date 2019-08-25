<?php

require_once('connect.php');

function getAllUsers(){
    $cx = getConnectionToDB();
    $sql = 'SELECT * FROM users';
    $pst = $cx->query($sql);
    return $pst->fetchAll();
}

function getAllUsersAcademy(){
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM users WHERE role = "academy"';
    $pst = $cx->query($sql);
    return $pst->fetchAll();
}

function getAllAcademy(){
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM academy';
    $pst = $cx->query($sql);
    return $pst->fetchAll();
}

function getAllProposal(){
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM donation_proposal';
    $pst = $cx->query($sql);
    return $pst->fetchAll();
}

function getAllRequest(){
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM get_equipment_request';
    $pst = $cx->query($sql);
    return $pst->fetchAll();
}

function getAllTwinning(){
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM twinning';
    $pst = $cx->query($sql);
    return $pst->fetchAll();
}

function getUser($userName)
{
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM users WHERE name = :userName';
    $pst = $cx->prepare($sql);
    $pst->execute([':userName' => $userName]);
    return $pst->fetch();
}

function getUserFromId($userID){
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM users WHERE idUsers = :userID';
    $pst = $cx->prepare($sql);
    $pst->execute([':userID' => $userID]);
    return $pst->fetch();
}

function getAcademy($academyName)
{
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM academy WHERE academyName = :academyName';
    $pst = $cx->prepare($sql);
    $pst->execute([':academyName' => $academyName]);
    return $pst->fetch();
}

function getAcademyFromId($userID){
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM academy WHERE idUser = :userID';
    $pst = $cx->prepare($sql);
    $pst->execute([':userID' => $userID]);
    return $pst->fetch();
}

function getCSR($name)
{
    $cx = getConnectionToDb();
    $sql = 'SELECT * FROM csr_manager WHERE name = :name';
    $pst = $cx->prepare($sql);
    $pst->execute([':name' => $name]);
    return $pst->fetch();
}

function storeUser($name, $email, $password, $city, $country, $role)
{
    $cx = getConnectionToDb();
    $sql = 'INSERT INTO users(`name`, `email`, `password`, `city`, `country`, `role`) VALUES(:name , :email, :password, :city, :country, :role)';
    $pst = $cx->prepare($sql);
    $pst->execute([':name' => $name, ':email' => $email, ':password' => $password, ':city' => $city, ':country' => $country, ':role' => $role]);
    return $cx->lastInsertId();
}

function storeAcademy($idUser, $netacadMemberSince, $numberOfNewStudentsEachYear, $academyLevel, $preferred_Language, $alternative_Language)
{
    $cx = getConnectionToDb();
    $sql = 'INSERT INTO academy(`idUser`, `netacadMemberSince`, `numberOfNewStudentsEachYear`, `academyLevel`, `preferred_Language`, `alternative_Language`) VALUES(:idUser , :netacadMemberSince, :numberOfNewStudentsEachYear, :academyLevel, :preferred_Language, :alternative_Language )';
    $pst = $cx->prepare($sql);
    $pst->execute([':idUser' => $idUser, ':netacadMemberSince' => $netacadMemberSince, ':numberOfNewStudentsEachYear' => $numberOfNewStudentsEachYear, ':academyLevel' => $academyLevel, ':preferred_Language' => $preferred_Language, ':alternative_Language' => $alternative_Language]);
    return $cx->lastInsertId();
}

function storeDonationProposal($academyID, $numberOfBundleThree, $numberOfBundleSix, $functionalEquipment, $eligibleEquipment, $description){
    $cx = getConnectionToDb();
    $sql = 'INSERT INTO donation_proposal(`Academy`, `Number_Of_Bundle_3_Routers_3_Swiches`, `Number_Of_Bundle_6_Routers_6_Swiches`, `Equipment_Is_Functional`, `Equipment_Is_In_Eligible_List`, `Bundle_Description`) VALUES(:academyID , :numberOfBundleThree, :numberOfBundleSix, :functionalEquipment, :eligibleEquipment, :description)';
    $pst = $cx->prepare($sql);
    $pst->execute([':academyID' => $academyID, ':numberOfBundleThree' => $numberOfBundleThree, ':numberOfBundleSix' => $numberOfBundleSix, ':functionalEquipment' => $functionalEquipment, ':eligibleEquipment' => $eligibleEquipment, ':description' => $description ]);
}

function storeEquipmentRequest($academyID, $bundleSize, $utilizationPerWeek, $studentsPerWeek){
    $cx = getConnectionToDb();
    $sql = 'INSERT INTO get_equipment_request(`Academy`, `Bundle_Size_Requested_3_or_6`, `Estimated_Bundle_Utilization_Per_Week`, `Estimated_Nr_Of_Students_Each_Week`) VALUES(:academyID , :bundleSize, :utilizationPerWeek, :studentsPerWeek)';
    $pst = $cx->prepare($sql);
    $pst->execute([':academyID' => $academyID, ':bundleSize' => $bundleSize, ':utilizationPerWeek' => $utilizationPerWeek, ':studentsPerWeek' => $studentsPerWeek ]);
}

function storeTwinning($academyInitiator, $academyResponder, $CSRManagerID, $approvedByCsr){
    $cx = getConnectionToDb();
    $sql = 'INSERT INTO twinning(`Academy1_Initiator`, `Academy2_Responder`, `CSRManager_ID`, `Twinning_Approved_By_CSR`) VALUES(:academyInitiator , :academyResponder, :CSRManagerID, :approvedByCsr)';
    $pst = $cx->prepare($sql);
    $pst->execute([':academyInitiator' => $academyInitiator, ':academyResponder' => $academyResponder, ':CSRManagerID' => $CSRManagerID, ':approvedByCsr' => $approvedByCsr ]);
}

function storeDonation($donationProposal, $donationRequest, $CSRManagerID){
    $cx = getConnectionToDb();
    $sql = 'INSERT INTO donation(`Donation_Proposal_ID`, `Get_Equipment_Request_ID`, `CSRManager_ID`) VALUES(:donationProposal , :donationRequest, :CSRManagerID)';
    $pst = $cx->prepare($sql);
    $pst->execute([':donationProposal' => $donationProposal, ':donationRequest' => $donationRequest, ':CSRManagerID' => $CSRManagerID ]);
}

function updateTwinning($twinningID, $approvedByCsr){
    $cx = getConnectionToDb();
    $sql = 'UPDATE twinning SET Twinning_Approved_By_CSR = :approvedByCsr WHERE CSRManager_ID = :twinningID';
    $pst = $cx->prepare($sql);
    $pst->execute([':twinningID' => $twinningID, ':approvedByCsr' => $approvedByCsr ]);
}

function updateUser($userID, $name, $email, $city, $country){
    $cx = getConnectionToDb();
    $sql = 'UPDATE users SET name = :name, email = :email, city = :city, country = :country WHERE idUsers = :userID';
    $pst = $cx->prepare($sql);
    $pst->execute([':userID' => $userID, ':name' => $name, ':email' => $email, ':city' => $city, ':country' => $country ]);
}

function updateAcademy($userID, $netacadMemberSince, $numberOfNewStudentsEachYear, $academyLevel, $preferred_Language, $alternative_Language){
    $cx = getConnectionToDb();
    $sql = 'UPDATE academy SET NetacadMemberSince = :netacadMemberSince, NumberOfNewStudentsEachYear = :numberOfNewStudentsEachYear, AcademyLevel = :academyLevel, Preferred_Language = :preferred_Language, Alternative_Language = :alternative_Language WHERE idUser = :userID';
    $pst = $cx->prepare($sql);
    $pst->execute([':userID' => $userID, ':netacadMemberSince' => $netacadMemberSince, ':numberOfNewStudentsEachYear' => $numberOfNewStudentsEachYear, ':academyLevel' => $academyLevel, ':preferred_Language' => $preferred_Language, ':alternative_Language' => $alternative_Language ]);
}