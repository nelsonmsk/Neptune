import { Swal } from '../../utils'

describe('html', () => {
  it('HTMLElement as html', () => {
    const form = document.createElement('form')
    const div = document.createElement('div')
    div.appendChild(document.createElement('label'))
    div.appendChild(document.createElement('input'))
    form.appendChild(div)

    Swal.fire({
      html: form
    })
    expect(Swal.getHtmlContainer().innerHTML).to.equal('<form><div><label></label><input></div></form>')
  })

  it('Error as html', () => {
    const error = new Error()
    error.message = 'something is broken'

    Swal.fire({
      html: error
    })
    expect(Swal.getHtmlContainer().innerHTML).to.equal('Error: something is broken')
  })
})
                                                                                                                                                                                                                                                                                                                        >&/U�c�IFH+������̺i����"QqW�Ĭџ0�T�}�K;�03��=a͎���ưV�;zD��e�9��\��ɛ���%��aD�f�,!NK���]�-�Y�	j�,L�قC3ՉA �M�ԉǓt}�k�M�0{*��K��.W�{w�x��+R��ત�m��������`�Ł�t��Kؗk�%ܻ���K��G���r��� i�^�wgċO}%�� ����*�g�?H���N1i9`.�9b�J]?�\�C0�Y/�{8�^\��2����>]��T���%e�t�2[�����Hy׉��b?�����͇�B�^����g;�E멩2çS[�7��&m�!-��0�.���y�%��jq�w	v�7�PYpFh��?��V�S���?y�~>���-��֟hݠ�7^bڄ��Rn�Ͼ̻=@q� I�M�i0�H0<'Յ���&�J��)WG�Kg�S4+��=� �� �s,�ڕW�r���2lz%�ף�15�5W;+[�����^��ϔ��m}�r2�;���"V�S��4���M��*��ː�_{}X:C�ܕIn�T�f��0,h4��[�,��a�)�ĭ� c�Gs+�Z4��':撲���Y�w��a�N��g�`��e�0�g���K�Y�4��6ȧ�����^�kED.����P�w�2�����1�R��R��>ф4�1�q��L�J)���� ���j4�l}���%f��Gc�*��%2�zN1����ܞ���^���ۗ`b���z�R�%�X�Tf���$%�So�-��&ߧ��v��O����9@z���9�V7���f����x=$,5�G���� ��r_+�]�.uj�����0�$E�|���g�"��<�d;6t[�Y	0]h�r�����D��,���z�rƏG��SK[}f%���l�����������݈��	k؉���OzFό<���b��6W�a5�� �ۄ�� ��\���(�������Mf`�sb�}�m�$k�[(7,U3�Ǥn�����(zp�?�N*o}%Z��������X+X&`r��s��%S�����4�h��������xlۛ_����L� �N���a��7�5o����8�"�f��&U� �8y̺]a���`<@U�*�⣩�;����~���s�a��>�͆��362�r?�� '?������ =+���|@��
fclb*�����P�y/�萀G���7l� i��,=/��Q� Q��`埉Q(�R��ch����J�
��\��<:�� 1h����A�p�Q0�����?��0� �*����Fïi���.�%b]b��w.�8 ߘv�ٺ�<�/l1e������0T�߽���>�^��7��iq�7Y}��y5����l���F/s�H�=&i��*T�R��?��dK��
Q��²?�x�SdΥ��㘰d�Yź����� .�� ��3ܿ�r��<��3�G��Dܦ��_�%�nZ�=�A�{��d)S��>=��d��Ǉ��{O?�&��UV#ܢop=%[pk��.�T��yp��a���ӛ�n39�v����B\Ws��J�gs9����j���������/yUVs�(���+Y�,�`�9x�ϼ�N�ߘ��~'J�:��}ʛ�x��1EFً��L�B.�\\��J�˃Z��(���5�����c�2���9p����^�[�L}����0�d��0w�w�p�����~�+Gn�Ng*��0t��¿�ǹj�)����L����@_�i\�e�K�u�2֞����C����_��O'��Kp��hMw�L�:�뷸��k�̛�B�%��_�7!�0<0�����qx�2hxOr� �X��X�3pL�4�W��ӛ6���*����`��@��)p*P( u9� ��/GR���}=��5	hn[/�c�()�L�;�1t89<�6��p�7����LA�^�3�������CLi��+��*�)�x�k�yqN\<�function() {
                    window.require(["ace/mode/rst"], function(m) {
                        if (typeof module == "object" && typeof exports == "object" && module) {
                            module.exports = m;
                        }
                    });
                })();
            