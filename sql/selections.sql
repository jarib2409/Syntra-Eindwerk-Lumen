-- Select all values for displaying on the cat-page given an id
SELECT * 
FROM cats 
WHERE cats.id = id;

-- Select all values for displaying on the cat-page given an id
SELECT id, gender, name, birthdate, breed, furColor, furLength, chipNumber, preferences
FROM cats 
WHERE cats.id = id;

-- Select all values for displaying on the cat-page given an id
SELECT id, cat1Id, cat2Id, relation
FROM catRelations
WHERE cat1Id.id = id OR cat2Id.id = id;


-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM adopters 
WHERE adopters.id = id;

-- TODO: change these to make them output correctly
-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM  Notifications
WHERE ;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM catRelations 
WHERE id = id;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM adopterRoommates 
WHERE id = id;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM adopterPets
WHERE id = id;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM vetVisits 
WHERE id = id;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM fosterFamilies 
WHERE id = id;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM fosterPets 
WHERE id = id;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM fosterRoommates 
WHERE id = id;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM catPictures 
WHERE catId = id;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM shelters 
WHERE id = id;

-- Select all values for displaying on the adopter-page given an id
SELECT * 
FROM weighings 
WHERE catId = id;