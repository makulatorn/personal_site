import { Resend } from 'resend';
import { fail } from '@sveltejs/kit';
import dotenv from 'dotenv';
dotenv.config();


/** @type {import('./$types').Actions} */
export const actions = {
	/** @param {import('@sveltejs/kit').RequestEvent} event */
	default: async ({ request }) => {
		const data = await request.formData();
		const email = data.get('email');
		const message = data.get('message');
		
		if (typeof email !== 'string' || typeof message !== 'string') {
			return fail(400, { success: false });
		}
		const resend = new Resend(process.env.RESEND_API_KEY);

    const toEmail = process.env.TO_EMAIL;
    if (!toEmail) {
      console.error('TO_EMAIL environment variable is not defined.');
      return fail(500, { success: false });
    }

    try {
      await resend.emails.send({
        from: 'Trasha <contact@trasha.dev>',
        to: toEmail,
        subject: 'New message from your site',
        text: `From: ${email}\n\n${message}`
      });

      return { success: true };
    } catch (err) {
      console.error('Resend error:', err);
      return fail(500, { success: false });
    }
  }
};
