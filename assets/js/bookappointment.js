const findLoc=()=>{
    const status = document.querySelector('.status');
    const success= (position) => {
        console.log(position)
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        const geoApiUrl="https://api.bigdatacloud.net/data/reverse-geocode-client?latitude-$(latitude)&longitude-$(longitude}&localityLanguage=en"
        fetch(geoApiUrl)
        .then(res=>res.json())
        .then(data=> {
          console.log(data)
          document.getElementById('state').value = data.principalSubdivision
          document.getElementById('locality').value = data.locality
          document.getElementById('country').value = data.countryName
          document.getElementById('city').value = data.city
          document.getElementById('pin').value = data.postcode 
            
  
        })
   }
  
      const error= () => {
        status.textContent = 'Unable to retrieve your location';
      }
    navigator.geolocation.getCurrentPosition(success,error);
  }
  
  document.querySelector('.findLocat').addEventListener("click",findLoc);
  //document.getElementById('state').value = textContent;