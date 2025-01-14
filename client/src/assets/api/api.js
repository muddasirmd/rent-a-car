import axios from 'axios';

// Create an Axios instance with default configuration
const api = axios.create({
  baseURL: 'http://127.0.0.1:8000/api', // Replace with your base API URL
  timeout: 10000, // Set a timeout for requests
  headers: {
    'Content-Type': 'application/json',
  },
});

// Add a request interceptor for adding Authorization headers
api.interceptors.request.use(
    config => {
        const token = localStorage.getItem('token');
        if (token) {
            config.headers.Authorization = `Bearer ${token}`;
        }
        return config;
    },
    error => {
        return Promise.reject(error);
    }
);

// Add a response interceptor for handling errors globally
api.interceptors.response.use(
    response => {
        return response;
    },
    error => {
        if (error.response) {
            // The request was made and the server responded with a status code
            // that falls out of the range of 2xx
            console.error("API Response Error:", error.response.status, error.response.data);
            if(error.response.status === 401){
                localStorage.removeItem('token');
                window.location.href = '/login';
            }
        } else if (error.request) {
            // The request was made but no response was received
            // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
            // http.ClientRequest in node.js
            console.error("API Request Error:", error.request);
        } else {
            // Something happened in setting up the request that triggered an Error
            console.error('API Error:', error.message);
        }
        return Promise.reject(error);
    }
);

export default api;
