import del from 'del';
import config from '../config.js';

const clean = () => del([config.dest.js, config.dest.css]);

export default clean;
