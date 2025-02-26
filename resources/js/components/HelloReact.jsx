import { useState } from 'react';
import reactLogo from '../../assets/react.svg';
import viteLogo from '../../assets/vite.svg';
import '../../css/components/HelloReact.css';

export default function HelloReact() {
    const [count, setCount] = useState(0);

    return (
        <>
            <div>
                <img src={ reactLogo }
                className='logo' alt='React logo' />
                <img src={ viteLogo }
                className='logo' alt='Vite logo' />
            </div>
            <h1>Vite & React</h1>
            <div className="card">
                <button className='btn' onClick={() => setCount((count) => count + 1)}>
                    count is {count}
                </button>
            </div>
        </>
    );
}