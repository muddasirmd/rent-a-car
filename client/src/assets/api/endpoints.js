import api from './api'; // Import the configured Axios instance

const getCars = () => api.get('/cars');


export default {
    getCars
};