import api from './api'; // Import the configured Axios instance


const getCars = async () => {
    try{
        const response = await api.get('/cars');
        return response.data
    }
    catch(error){
        // throw error
        return error;
    }
    finally{

    }
}

const getCar = async (id) => {
    try{
        const response = await api.get('/cars/'+id);
        return response.data
    }
    catch(error){
        // throw error
        return error;
    }
    finally{

    }
}

export default {
    getCars,
    getCar,
};